<?php

namespace App\Http\Controllers;

use App\Router;
use App\Sector;
use Illuminate\Http\Request;

class RouterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $router = Router::latest()->paginate(5);

        return view('router.index',compact('router'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectors = Sector::all()->pluck('name', 'id');
        return view('router.create', compact('sectors'));
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
            'horizontal'=>'required',
            'vertical'=>'required',
            'sector_id'=>'required',
        ]);

        $router = new Router([
            'name' => $request->get('name'),
            'serial' => $request->get('serial'),
            'horizontal' => $request->get('horizontal'),
            'vertical' => $request->get('vertical'),
            'sector_id' => $request->get('sector_id'),
        ]);

        $router->save();
        return redirect()->route('router.index')
            ->with('success','Router created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $router = Router::find($id);

        return view('router.show',compact('router'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $router = Router::find($id);
        $sectors = Sector::all()->pluck('name', 'id');
        return view('people.edit',compact('router', 'sectors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'serial'=>'required',
            'horizontal'=>'required',
            'vertical'=>'required',
            'sector_id'=>'required',
        ]);

        $router = Router::find($id);

        $router->name = $request->get('name');
        $router->serial = $request->get('serial');
        $router->horizontal = $request->get('horizontal');
        $router->vertical = $request->get('vertical');
        $router->sector_id = $request->get('sector_id');

        $router->save();

        return redirect()->route('router.index')
            ->with('success','Router updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $router = Router::find($id);
        $router->delete();

        return redirect()->route('router.index')
            ->with('success','Router deleted successfully');
    }
}
