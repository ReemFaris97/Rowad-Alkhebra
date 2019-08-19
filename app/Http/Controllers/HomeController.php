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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.index');
    }

    public function goals()
    {
        return view('website.goals');
    }

    public function services()
    {
        return view('website.services');
    }
    public function speech()
    {
        return view('website.speech');
    }
    public function responsability()
    {
        return view('website.responsability');
    }
}
