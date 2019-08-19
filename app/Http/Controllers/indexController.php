<?php

namespace App\Http\Controllers;


use App\Answer;
use App\Banner;
use App\Category;
use App\Client;
use App\Contact;
use App\Department;
use App\Employe;
use App\News;
use App\Product;
use App\Service;
use App\Structure;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
