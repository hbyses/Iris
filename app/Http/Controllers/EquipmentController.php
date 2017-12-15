<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;
use Iris\Equipment;

class EquipmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment = Equipment::All();

        $title = 'Equipment';
        return view ('pages.equipment.master-list', ['title' => $title, 'equipment' => $equipment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Equipment Item';
        return view ('pages.equipment.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required',
                'consumable' => 'required'
        ]);

        $equipment = new Equipment;
        $equipment->id = $request->input('id');
        $equipment->name = $request->input('name');
        $equipment->description = $request->input('description');
        $equipment->brand = $request->input('brand');
        $equipment->size = $request->input('size');
        $equipment->consumableFlag = $request->input('consumable');
        $equipment->save();

        return redirect('/equipment')->with('success', 'Equipment Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipmentData = Equipment::find($id);
        $title = 'Equipment';
        return view('pages.equipment.view', ['equipmentData' => $equipmentData, 'title' => $title]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function groups(){
        $title = 'Equipment Groups';
        return view('pages.equipment.groups-list')->with('title', $title);
    }

    public function locations(){
        $title = 'Equipment Locations';
        return view('pages.equipment.master-locations-list')->with('title', $title);
    }

    public function suppliers(){
        $title = 'Equipment Suppliers';
        return view('pages.equipment.suppliers-list')->with('title', $title);
    }
}
