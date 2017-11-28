<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index(){
        $title = 'Equipment';
        return view('pages.equipment.index')->with('title', $title);
    }
}
