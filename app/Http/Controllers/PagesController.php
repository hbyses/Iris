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
        $title = 'IRIS';
        $parentBreadcrumb = array(
            'url' => 'test',
            'name' => 'test'
        );

        return view ('pages.main.index', ['title' => $title, 'parentBreadcrumb' => $parentBreadcrumb]);
        //return $parentBreadcrumb;
    }
}
