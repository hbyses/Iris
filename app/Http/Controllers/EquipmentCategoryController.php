<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;
use Iris\EquipmentCategory;
use Iris\Equipment;

class EquipmentCategoryController extends Controller
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
        $equipmentCategories = EquipmentCategory::with('equipmentCategory')->get();
       
        $parentBreadcrumbs = array();
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/equipmentCategory',
                'name' => 'EquipmentCategory'
            ),
        );

        $title = 'EquipmentCategory';
        return view ('pages.equipmentCategory.master-list', ['parentBreadcrumbs' => $parentBreadcrumbs, 'title' => $title, 'equipmentCategories' => $equipmentCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New EquipmentCategory Item';
        return view ('pages.equipmentCategory.create')->with('title', $title);
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

        $equipmentCategory = new EquipmentCategory;
        $equipmentCategory->id = $request->input('id');
        $equipmentCategory->name = $request->input('name');
        $equipmentCategory->description = $request->input('description');
        $equipmentCategory->equipmentCategoryManager_id = $request->input('equipmentCategoryManager_id');
        $equipmentCategory->parentEquipmentCategory_id = $request->input('parentEquipmentCategory_id');
        $equipmentCategory->save();

        return redirect('/equipmentCategory')->with('success', 'EquipmentCategory Created');
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
                'url' => '/equipmentCategory',
                'name' => 'EquipmentCategory'
            ),
        );
        
        $equipmentCategoryData = EquipmentCategory::find($id);
        $title = 'EquipmentCategory';
        return view('pages.equipmentCategory.view', ['parentBreadcrumbs' => $parentBreadcrumbs, 'equipmentCategoryData' => $equipmentCategoryData, 'title' => $title]);
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

}
