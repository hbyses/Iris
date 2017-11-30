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
        $title = 'Welcome to Iris!';
        //return view('pages.index', compact('title'));
        return view('pages.main.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Iris';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
