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
        /*$parentBreadcrumbs = array(
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
        );*/

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

    public function modeqactcat(){ //Modify equipment activitiy categories
        //Page Title
        $title = 'Modify Activity Categories';

        //Breadcrumbs
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/admin',
                'name' => 'Admin'
            ),
            '2' => array(
                'url' => '/admin/settings',
                'name' => 'Settings'
            ),
        );

        //Render Section
        return view ('pages.settings.act-cats', ['title' => $title, 'parentBreadcrumbs' => $parentBreadcrumbs]);
    }


}
