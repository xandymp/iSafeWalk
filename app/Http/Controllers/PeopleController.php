<?php

namespace App\Http\Controllers;

use App\Beacon;
use App\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeopleController extends LocationController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::get();
        return view('people.index',compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $people = People::get();
        $beacons = Beacon::all()->pluck('name', 'id');
        return view('people.create', compact('people', 'beacons'));
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
            'email'=>'required',
            'status'=>'required',
            'birth_date'=>'required',
        ]);

        $person = new People([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'status' => $request->get('status'),
            'birth_date' => $request->get('birth_date'),
            'job_title' => $request->get('job_title'),
            'beacon_id' => $request->get('beacon_id'),
        ]);

        $person->save();
        return redirect()->route('people.index')
            ->with('success','Person created successfully.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $person = People::find($id);
        $status = People::STATUS_SELECT[$person->status];

        return view('people.show',compact('person', 'status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $person = People::find($id);
        $beacons = Beacon::all()->pluck('name', 'id');
        return view('people.edit',compact('person', 'beacons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int  $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'status'=>'required',
            'birth_date'=>'required',
        ]);

        $person = People::find($id);

        $person->name = $request->get('name');
        $person->email = $request->get('email');
        $person->status = $request->get('status');
        $person->birth_date = $request->get('birth_date');
        $person->job_title = $request->get('job_title');
        $person->beacon_id = $request->get('beacon_id');

        $person->save();

        return redirect()->route('people.index')
            ->with('success','Person updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $person = People::find($id);
        $person->delete();
    }

    public function locationMap(int $id)
    {
        $person = People::find($id);
        $status = People::STATUS_SELECT[$person->status];
        if (is_null($person->beacon)) {
            return view('people.show',compact('person', 'status'));
        }

        $beaconLocations = $this->showPreviousLocations($person->beacon->id, false);

        if (empty($beaconLocations)) {
            return view('people.show',compact('person', 'status'))
                ->with('warning','No location detected.');
        }

        // Get sectors and their positions to draw the map
        $zones = $this->getZones();

        // Colocar a quantidade de vezes em uma determinada coordenada
        $heatMap = $this->showPreviousLocations($person->beacon->id, true);

        return view('people.locationMap',compact('person', 'beaconLocations', 'zones', 'heatMap'));
    }

    public function interactions(int $id)
    {
        $person = People::find($id);
        $status = People::STATUS_SELECT[$person->status];
        if (is_null($person->device)) {
            return view('people.show',compact('person', 'status'));
        }

        $interactions = $this->getInteractions($person->device->id);

        if (empty($interactions)) {
            return view('people.show',compact('person', 'status'))
                ->with('warning','No interactions.');
        }

        return view('people.interactions',compact('person', 'interactions'));
    }

    private function getInteractions(int $deviceId, array $previousDevices = [])
    {
        $interactions = [];

        $previousInteractions = DB::table('device_interactions AS di')
            ->leftJoin('people AS p', 'di.secondary_device_id', '=', 'p.device_id')
            ->join('devices AS d', 'di.secondary_device_id', '=', 'd.id')
            ->select(
                'di.id',
                'di.primary_device_id',
                'di.secondary_device_id',
                'di.interactions',
                'p.id AS person_id',
                'p.name AS person_name',
                'd.name AS device_name'
            )
            ->where('di.primary_device_id', '=', $deviceId)
            ->where('di.primary_device_id', '=', $deviceId)
            ->when($previousDevices, function ($query, $previousDevices) {
                return $query->whereNotIn('di.secondary_device_id', $previousDevices);
            })
            ->whereNull('di.deleted_at')
            ->orderBy('di.secondary_device_id')
            ->orderBy('di.created_at', 'desc')
            ->get();

        if ($previousInteractions->count() == 0) {
            return $interactions;
        }

        foreach ($previousInteractions as $previousInteraction) {
            $interactions[$previousInteraction->id] = $this->decorateInteraction($previousInteraction);
            $previousDevices[] = $deviceId;
            $previousDevices[] = $previousInteraction->secondary_device_id;
            // get secondary interactions
            $interactions[$previousInteraction->id]['secondary_interactions'] = $this->getInteractions($previousInteraction->secondary_device_id, array_unique($previousDevices));
        }

        return $interactions;
    }

    private function decorateInteraction($interaction)
    {
        return [
            'primary_device_id' => $interaction->primary_device_id,
            'secondary_device_id' => $interaction->secondary_device_id,
            'interactions' => $interaction->interactions,
            'person_id' => $interaction->person_id,
            'person_name' => $interaction->person_name,
            'device_name' => $interaction->device_name,
        ];
    }
}
