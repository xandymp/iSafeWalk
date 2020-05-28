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
        if (is_null($person->beacon)) {
            return view('people.show',compact('person', 'status'));
        }

        $interactions = $this->getInteractions($person->beacon->id);

        if (empty($interactions)) {
            return view('people.show',compact('person', 'status'))
                ->with('warning','No interactions.');
        }

        return view('people.interactions',compact('person', 'interactions'));
    }

    private function getInteractions(int $beaconId, array $previousBeacons = [])
    {
        $interactions = [];

        $previousInteractions = DB::table('beacons_interactions AS bi')
            ->leftJoin('people AS p', 'bi.secondary_beacon_id', '=', 'p.beacon_id')
            ->join('beacons AS b', 'bi.secondary_beacon_id', '=', 'b.id')
            ->select(
                'bi.id',
                'bi.primary_beacon_id',
                'bi.secondary_beacon_id',
                'bi.duration',
                'bi.interaction_time',
                'p.id AS person_id',
                'p.name AS person_name',
                'b.name AS beacon_name'
            )
            ->where('bi.primary_beacon_id', '=', $beaconId)
            ->where('bi.primary_beacon_id', '=', $beaconId)
            ->when($previousBeacons, function ($query, $previousBeacons) {
                return $query->whereNotIn('bi.secondary_beacon_id', $previousBeacons);
            })
            ->whereNull('bi.deleted_at')
            ->orderBy('bi.secondary_beacon_id')
            ->orderBy('bi.created_at', 'desc')
            ->get();

        if ($previousInteractions->count() == 0) {
            return $interactions;
        }

        foreach ($previousInteractions as $previousInteraction) {
            $interactions[$previousInteraction->id] = $this->decorateInteraction($previousInteraction);
            $previousBeacons[] = $beaconId;
            $previousBeacons[] = $previousInteraction->secondary_beacon_id;
            // get secondary interactions
            $interactions[$previousInteraction->id]['secondary_interactions'] = $this->getInteractions($previousInteraction->secondary_beacon_id, array_unique($previousBeacons));
        }

        return $interactions;
    }

    private function decorateInteraction($interaction)
    {
        return [
            'primary_beacon_id' => $interaction->primary_beacon_id,
            'secondary_beacon_id' => $interaction->secondary_beacon_id,
            'duration' => $interaction->duration,
            'interaction_time' => $interaction->interaction_time,
            'person_id' => $interaction->person_id,
            'person_name' => $interaction->person_name,
            'beacon_name' => $interaction->beacon_name,
        ];
    }
}
