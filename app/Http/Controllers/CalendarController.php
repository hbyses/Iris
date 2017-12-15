<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($filter = null){
        $title = 'Calendar';
        if (isset($filter) /*&& $filter !== ''*/) {
            return "<h1>Calendar filtered by $filter coming soon!</h1>";
        } else {
            return "<h1>Calendar coming soon!</h1>";
            //return view('pages.types.datatable')->with('title', $title);
        }
    }
}
