<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
     public function view()
    {
        return view('viewBanduser');
    }

    public function view2()
    {
        return view('featuredartist');
    }
    
     public function lovelyeditusers()
    {
        return view('editUsers');
    }
}
