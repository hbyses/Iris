<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;

class FleetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function vehicles(){
        $title = 'Vehicles';
        return view('pages.types.datatable')->with('title', $title);
    }

    public function vel(){
        $title = 'Vehicle Equipment Lists';
        return "<h1>Coming Soon</h1>";
    //    return view('pages.types.datatable')->with('title', $title);
    }

    public function bookings(){
        $title = 'Vehicle Bookings';
        return "<h1>Coming Soon</h1>";
    //    return view('pages.types.datatable')->with('title', $title);
    }
}
