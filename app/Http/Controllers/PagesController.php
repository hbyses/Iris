<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $title = 'Iris';
        //return view('pages.index', compact('title'));
        return view('pages.main.index')->with('title', $title);
    }
}
