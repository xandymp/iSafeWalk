<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::latest()->paginate(5);

        return view('device.index',compact('devices'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('device.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'serial'=>'required',
        ]);

        $device = new Device([
            'name' => $request->get('name'),
            'serial' => $request->get('serial'),
        ]);

        $device->save();
        return redirect()->route('device.index')
            ->with('success','Device created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $device = Device::find($id);
        $deviceLocation = $this->showLocation($id);
        return view('device.show',compact('device', 'deviceLocation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $device = Device::find($id);
        return view('device.edit',compact('device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name'=>'required',
            'serial'=>'required',
        ]);

        $device = Device::find($id);

        $device->name = $request->get('name');
        $device->serial = $request->get('serial');

        $device->save();


        return redirect()->route('device.index')
            ->with('success','Device updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $device = Device::find($id);

        $device->delete();
        return redirect()->route('device.index')
            ->with('success','Device deleted successfully');
    }

    public function showLocation(int $id)
    {
        $locationsHistory = $this->getDeviceLocationsHistory($id);
        return $this->discoverLocation($locationsHistory);
    }

    private function getDeviceLocationsHistory(int $deviceId)
    {
        $sectorId = $this->getSectorId($deviceId);

        return DB::table('location_history AS lh')
            ->join('sectors_routers AS sr', 'lh.router_id', '=', 'sr.router_id')
            ->select(
                'lh.id',
                'lh.device_id',
                'sr.sector_id',
                'lh.router_id',
                'router_horizontal',
                'router_vertical',
                'lh.distance',
                'lh.created_at'
            )
            ->where('lh.device_id', '=', $deviceId)
            ->where('sr.sector_id', '=', $sectorId)
            ->whereNull('lh.deleted_at')
            ->orderBy('lh.created_at', 'desc')
            ->orderBy('lh.distance')
            ->get();
    }

    private function getSectorId(int $deviceId)
    {
        return DB::table('location_history AS lh')
            ->join('sectors_routers AS sr', 'lh.router_id', '=', 'sr.router_id')
            ->where('lh.device_id', '=', $deviceId)
            ->groupBy('sr.sector_id', 'lh.created_at')
            ->havingRaw('COUNT(0) = ?', [3])
            ->orderBy('lh.created_at', 'desc')
            ->value('sr.sector_id');
    }

    public function discoverLocation($locationsHistory)
    {
        $router1 = [];
        $router2 = [];
        $router3 = [];

        foreach ($locationsHistory as $locationHistory) {
            if (empty($router1['router_id'])) {
                $router1 = $this->decorateRouter($locationHistory);
                continue;
            }
            if (empty($router2['router_id'])
                && $locationHistory->router_id != $router1['router_id']
            ) {
                $router2 = $this->decorateRouter($locationHistory);
                continue;
            }
            if (empty($router3['router_id'])
                && $locationHistory->router_id != $router1['router_id']
                && $locationHistory->router_id != $router2['router_id']
            ) {
                $router3 = $this->decorateRouter($locationHistory);
                break;
            }
        }

        return $this->findLocation($router1, $router2, $router3);
    }

    private function decorateRouter($locationHistory)
    {
        $router['router_id'] = $locationHistory->router_id;
        $router['sector_id'] = $locationHistory->sector_id;
        $router['horizontal'] = $locationHistory->router_horizontal;
        $router['vertical'] = $locationHistory->router_vertical;
        $router['distance'] = $locationHistory->distance;

        return $router;
    }

    private function findLocation(array $router1, array $router2, array $router3)
    {
        $devicePosition = [
            'horizontal' => 0,
            'vertical' => 0,
            'sector_id' => 0,
        ];

        if (empty($router1)
            || empty($router2)
            || empty($router3)
        ) {
            return $devicePosition;
        }

        // calculate the location of the device based on the 3 routers location and distance
        $A = 2*$router2['horizontal'] - 2*$router1['horizontal'];
        $B = 2*$router2['vertical'] - 2*$router1['vertical'];
        $C = pow($router1['distance'], 2)
            - pow($router2['distance'], 2)
            - pow($router1['horizontal'], 2)
            + pow($router2['horizontal'], 2)
            - pow($router1['vertical'], 2)
            + pow($router2['vertical'], 2)
        ;
        $D = 2*$router3['horizontal'] - 2*$router2['horizontal'];
        $E = 2*$router3['vertical'] - 2*$router2['vertical'];
        $F = pow($router2['distance'], 2)
            - pow($router3['distance'], 2)
            - pow($router2['horizontal'], 2)
            + pow($router3['horizontal'], 2)
            - pow($router2['vertical'], 2)
            + pow($router3['vertical'], 2)
        ;

        // finding the x and y of the device
        $devicePosition['horizontal'] = (($C * $E) - ($F * $B)) / (($E * $A) - ($B * $D));
        $devicePosition['vertical'] = (($C * $D) - ($A * $F)) / (($B * $D) - ($A * $E));

        $devicePosition['sector_id'] = $router1['sector_id'];

        return $devicePosition;
    }
}
