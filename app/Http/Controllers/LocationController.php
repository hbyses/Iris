<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;
use Iris\Location;

class LocationController extends Controller
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
        $location = Location::All();

        $parentBreadcrumbs = array();
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/location',
                'name' => 'Location'
            ),
        );

        $title = 'Location';
        return view ('pages.location.master-list', ['parentBreadcrumbs' => $parentBreadcrumbs, 'title' => $title, 'location' => $location]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New Location Item';
        return view ('pages.location.create')->with('title', $title);
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

        $location = new Location;
        $location->id = $request->input('id');
        $location->name = $request->input('name');
        $location->description = $request->input('description');
        $location->locationManager_id = $request->input('locationManager_id');
        $location->parentLocation_id = $request->input('parentLocation_id');
        $location->save();

        return redirect('/location')->with('success', 'Location Created');
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
                'url' => '/location',
                'name' => 'Location'
            ),
        );
        
        $locationData = Location::find($id);
        $title = 'Location';
        return view('pages.location.view', ['parentBreadcrumbs' => $parentBreadcrumbs, 'locationData' => $locationData, 'title' => $title]);
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
