<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($area = null){
        $title = 'Dashboards';
        if (isset($area) /*&& $filter !== ''*/) {
            return "<h1>Dashboards related to $area coming soon!</h1>";
        } else {
            
            //return view('pages.types.datatable')->with('title', $title);
        }
    }
}