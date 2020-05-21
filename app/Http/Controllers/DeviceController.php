<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;

class DeviceController extends LocationController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::get();
        return view('device.index',compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $devices = Device::get();
        return view('device.create', compact('devices'));
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
        $previousLocations = $this->showPreviousLocations($id);

        return view('device.show',compact('device', 'previousLocations'));
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
     */
    public function destroy(int $id)
    {
        $device = Device::find($id);

        $device->delete();
    }
}
