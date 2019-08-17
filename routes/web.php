<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(array('prefix' => 'dashboard','as'=>'admin.'), function() {

    Route::get('/', 'admin\indexController@index')->name('layout.main');
    Route::resource('banners', 'admin\bannerController');
    Route::resource('users', 'admin\userController');
    Route::resource('contacts', 'admin\contactController');
    Route::resource('clients', 'admin\clientController');
    Route::resource('services', 'admin\serviceController');
    Route::resource('structures', 'admin\structureController');
    Route::get('/active/{id}', 'Admin\newController@active')->name('active_new');


    Route::resource('settings', 'admin\SettingController');

});
