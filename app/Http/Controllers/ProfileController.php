<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function tasks($username = null){
        $title = 'Dashboards';
        if (isset($username) /*&& $filter !== ''*/) {
            return "<h1>Tasks for $username coming soon!</h1>";
        } else {
            return "<h1>Tasks coming soon!</h1>";
            //return view('pages.types.datatable')->with('title', $title);
        }
    }
    public function profile(){
        $title = 'Profile';
        return "<h1>User profiles coming soon!</h1>";
    }
}
