<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;
use Iris\User;

class UsersController extends Controller
{
    public function index()
    {
        //Breadcrumbs
        $parentBreadcrumbs = array();
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/admin',
                'name' => 'Admin'
            ),
        );

        $users = User::All();

        $title = 'Users';
        return view ('pages.users.master-list', ['title' => $title, 'users' => $users, 'parentBreadcrumbs' => $parentBreadcrumbs]);
    }
}