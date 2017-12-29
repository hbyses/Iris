<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $title = 'Calendar';
        $parentBreadcrumbs = array();
        return view('pages.calendar.index', ['parentBreadcrumbs' => $parentBreadcrumbs, 'title' => $title]);
    }
}
