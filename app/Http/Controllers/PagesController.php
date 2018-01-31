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
        
        //Page Title
        $title = 'Start';

        //Breadcrumbs
        $parentBreadcrumbs = array();

        //Render Section
        return view ('pages.main.index', ['title' => $title, 'parentBreadcrumbs' => $parentBreadcrumbs]);
    }

    public function settings(){
        //Page Title
        $title = 'Settings';

        //Breadcrumbs
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/admin',
                'name' => 'Admin'
            ),
        );

        //Render Section
        return view ('pages.settings.index', ['title' => $title, 'parentBreadcrumbs' => $parentBreadcrumbs]);
    }
}
