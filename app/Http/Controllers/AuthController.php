<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        $title = 'IRIS | Login';
        return view('pages.auth.login')->with('title', $title);
    }

    public function register(){
        $title = 'IRIS | Register';
        return view('pages.auth.register')->with('title', $title);
    }

    public function resetpw(){
        $title = 'IRIS | Forgot Password';
        return view('pages.auth.resetpw')->with('title', $title);
    }

    public function lock(){
        $title = 'IRIS | Locked';
        return view('pages.auth.lock')->with('title', $title);
    }  
}
