<?php

namespace App\Http\Controllers;


use App\Answer;
use App\Banner;
use App\Category;
use App\Client;
use App\Contact;
use App\Department;
use App\Employe;
use App\Gallery;
use App\Goal;
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
        $banners=Banner::all();
        $services=Service::paginate(4);
        $clients=Client::all();
        $structures=Structure::all();
        $galleries=Gallery::all();
        return view('website.index',compact('banners','services','structures','clients','galleries'));
    }

    public function goals()
    {
        $goals=Goal::paginate(4);
        return view('website.goals',compact('goals'));
    }

    public function services()
    {
        $services=Service::paginate(4);
        return view('website.services',compact('services'));
    }
    public function speech()
    {
        return view('website.speech');
    }
    public function responsability()
    {
        return view('website.responsability');
    }

    public function postContacts(Request $request)
    {
      //  dd($request->all());
        $this->validate($request,[
            'name'=>'required|string|max:191',

            'email'=>'required|nullable|string|email|max:255|unique:contacts',


            'phone'=>'required|string|',
        ]);
        $inputs=$request->all();

        // $user_id=Auth::user()->id;
        //  $inputs['user_id']=$user_id;

        $contacts=Contact::create($inputs);
        alert()->success('تم الإرسال بنجاح سيتم الرد عليك لاحقا')->autoclose(5000);
        return back();
    }

}
