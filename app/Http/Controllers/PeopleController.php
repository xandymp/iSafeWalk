<?php

namespace App\Http\Controllers;

use App\Device;
use App\People;
use Illuminate\Http\Request;

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
        $devices = Device::all()->pluck('name', 'id');
        return view('people.create', compact('people', 'devices'));
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
            'device_id' => $request->get('device_id'),
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
        $devices = Device::all()->pluck('name', 'id');
        return view('people.edit',compact('person', 'devices'));
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
        $person->device_id = $request->get('device_id');

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
        if (is_null($person->device)) {
            return view('people.show',compact('person', 'status'));
        }

        $deviceLocations = $this->showPreviousLocations($person->device->id, false);

        if (empty($deviceLocations)) {
            return view('people.show',compact('person', 'status'))
                ->with('warning','No location detected.');
        }

        // Get sectors and their positions to draw the map
        $zones = $this->getZones();

        // Colocar a quantidade de vezes em uma determinada coordenada
        $heatMap = $this->showPreviousLocations($person->device->id, true);

        return view('people.locationMap',compact('person', 'deviceLocations', 'zones', 'heatMap'));
    }
}
