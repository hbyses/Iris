<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;
use Iris\Equipment;
use Iris\EquipmentCategory;
use Iris\Auth;
use Iris\User;

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
        $equipment = Equipment::with('equipmentCategory')->get();

        $parentBreadcrumbs = array();

        $title = 'Equipment';
        return view ('pages.equipment.master-list', ['parentBreadcrumbs' => $parentBreadcrumbs, 'title' => $title, 'equipment' => $equipment]);
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
        //Add remaining fields here
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
        $parentBreadcrumbs = array();
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/equipment',
                'name' => 'Equipment'
            ),
        );
        
        $equipmentData = Equipment::find($id);
        $title = $equipmentData->name . " (ID:" . $equipmentData->id . ")";
        return view('pages.equipment.view', ['parentBreadcrumbs' => $parentBreadcrumbs, 'equipmentData' => $equipmentData, 'title' => $title]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipmentData = Equipment::with('equipmentCategory')->find($id); 

        $parentBreadcrumbs = array();
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/equipment',
                'name' => 'Equipment'
            ),
            '2' => array(
                'url' => '/equipment/' . $equipmentData->id,
                'name' =>  $equipmentData->name . ' (ID:' . $equipmentData->id . ')'
            ),
        );
        
        
        $title = "Edit" . " - " . $equipmentData->name . " (ID: " . $equipmentData->id . ")";
        return view('pages.equipment.edit', ['parentBreadcrumbs' => $parentBreadcrumbs, 'equipmentData' => $equipmentData, 'title' => $title]);
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
            $equipment = Equipment::find($id);
            $this->validate(request(), [
              'name' => 'required'
            ]);

            //Fields
            $equipment->name = $request->get('name');
            $equipment->equipmentType = $request->get('equipmentType');
            $equipment->brand = $request->get('brand');
            $equipment->model = $request->get('model');
            $equipment->size = $request->get('size');


            $equipment->save();
            return redirect('equipment/' . $equipment->id)->with('success','Equipment has been updated');
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
        $parentBreadcrumbs = array();
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/equipment',
                'name' => 'Equipment'
            ),
        );
        
        //$groups = Equipment::find($id);
        $groups = null;
        $title = 'Equipment Groups';
        
        return view('pages.equipment.groups', ['parentBreadcrumbs' => $parentBreadcrumbs, 'groups' => $groups, 'title' => $title]);
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
