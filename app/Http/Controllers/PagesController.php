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
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => 'test1',
                'name' => 'test1'
            ),
            '2' => array(
                'url' => 'test2',
                'name' => 'test2'
            ),
            '3' => array(
                'url' => 'test3',
                'name' => 'test3'
            )
        );

        return view ('pages.main.index', ['title' => $title, 'parentBreadcrumbs' => $parentBreadcrumbs]);
        //return $parentBreadcrumb;
    }
}
