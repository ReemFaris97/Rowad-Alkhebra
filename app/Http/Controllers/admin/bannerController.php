<?php

namespace App\Http\Controllers\Admin;

use App\Address;
use App\Banner;
use App\City;
use App\Group;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Activity;

class bannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.banners.index')->with('banners', Banner::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|mimes:png,jpg,jpeg,mp4,3gp,mkv,mpeg,avi|max:20000',
        ]);
        $image = uploader($request, 'image');
        $inputs = [];
        $inputs['image'] = $image;

        Banner::create($inputs);

        alert()->success('تم اضافة البنر بنجاح !')->autoclose(5000);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'image' => 'nullable|mimes:png,jpg,jpeg,mp4,3gp,mkv,mpeg,avi|max:20000',
        ]);

        $banner = Banner::find($id);
        $inputs = [];
        if ($request->hasFile('image')) {
            $image = uploader($request, 'image');
            $inputs['image'] = $image;
        }
        $banner->update($inputs);

        alert()->success('تم تعديل  البنر بنجاح !')->autoclose(5000);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);


        $banner->delete();

        alert()->success('تم حذف البنر بنجاح !')->autoclose(5000);

        return back();
    }
}
