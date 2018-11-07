<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;
use Iris\Equipment;
use Iris\EquipmentCategory;
use Iris\EquipmentActivity;
use Iris\Vendor;
use Iris\Auth;
use Iris\User;

class VendorController extends Controller
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
        $vendors = Vendor::get();

        $parentBreadcrumbs = array();

        $title = 'Vendors';
        return view ('pages.vendor.index', ['parentBreadcrumbs' => $parentBreadcrumbs, 'title' => $title, 'vendors' => $vendors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Vendor';
        return view ('pages.vendor.create')->with('title', $title);
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

        $vendor = new Vendor;
        $vendor->id = $request->input('id');
        $vendor->name = $request->input('name');
        $vendor->description = $request->input('description');
        $vendor->brand = $request->input('brand');
        $vendor->size = $request->input('size');
        $vendor->consumableFlag = $request->input('consumable');
        //Add remaining fields here
        $equipment->save();

        return redirect('/vendor')->with('success', 'New vendor has been created');
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
                'url' => '/vendor',
                'name' => 'Vendor'
            ),
        );
        
        $vendorData = Vendor::find($id);
        $title = $vendorData->name;
        return view('pages.vendor.view', ['parentBreadcrumbs' => $parentBreadcrumbs, 'vendorData' => $vendorData, 'title' => $title]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendorData = Vendor::find($id); 

        $parentBreadcrumbs = array();
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/vendor',
                'name' => 'Vendor'
            ),
            '2' => array(
                'url' => '/vendor/' . $vendorData->id,
                'name' =>  $vendorData->name
            ),
        );
        
        
        $title = "Edit Vendor";
        return view('pages.vendor.edit', ['parentBreadcrumbs' => $parentBreadcrumbs, 'vendorData' => $vendorData, 'title' => $title]);
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
            $vendorData = Vendor::find($id);
            $this->validate(request(), [
              'name' => 'required'
            ]);

            //Fields
            $vendorData->name = $request->get('name');
            $vendorData->description = $request->get('description');
            $vendorData->phone1 = $request->get('phone1');

            $vendorData->save();
            return redirect('vendor/' . $vendorData->id)->with('success','Vendor has been updated');
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
