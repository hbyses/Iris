<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;
use Iris\Equipment;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Equipment';
        return view('pages.equipment.view')->with('title', $title);
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

    
    public function list(){
        $title = 'Equipment';
        return view('pages.equipment.master-list')->with('title', $title);
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
