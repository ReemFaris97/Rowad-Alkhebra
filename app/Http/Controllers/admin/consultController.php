<?php

namespace App\Http\Controllers\Admin;

use App\Consult;
use App\Address;
use App\Banner;
use App\City;
use App\Group;
use App\News;
use App\Structure;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Activity;
use App\Mail\ReplyContactus;
class consultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.consults.index')->with('consults',Consult::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consult=Consult::findOrFail($id);
        return view('admin.consults.show' , compact('consult'));
    }

    public function update(Request $request, $id)
    {
        \Validator::make($request->all(),[
       'reply' => 'required|string'
      ]);
      $message = $request['reply'];
      $consult=Consult::findOrFail($id);
      $email = $consult->email;
      $logo =asset('admin/assets/images/logo-sm.png');
      \Mail::to($email)->send(new ReplyContactus($email,$message,$logo));
      alert()->success('تم الارسال بنجاخ ')->autoclose(5000);
      return back();
    }


    public function destroy($id)
    {
        $consult=Consult::findOrFail($id);


        $consult->delete();

        alert()->success('تم حذف طلب الاستشارة بنجاح !')->autoclose(5000);

        return back();
    }

}
