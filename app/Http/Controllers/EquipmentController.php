<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function list(){
        $title = 'Equipment';
        return view('pages.types.datatable')->with('title', $title);
    }

    public function groups(){
        $title = 'Equipment Groups';
        return view('pages.types.datatable')->with('title', $title);
    }

    public function locations(){
        $title = 'Equipment Locations';
        return view('pages.types.datatable')->with('title', $title);
    }

    public function suppliers(){
        $title = 'Equipment Suppliers';
        return view('pages.types.datatable')->with('title', $title);
    }
}
