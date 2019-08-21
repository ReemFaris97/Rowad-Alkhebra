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

Route::get('/', 'indexController@index')->name('index');
Route::get('/goals', 'indexController@goals')->name('goals');
Route::get('/services', 'indexController@services')->name('services');
Route::get('/speech', 'indexController@speech')->name('speech');
Route::get('/responsability', 'indexController@responsability')->name('responsability');

Route::post('/contacts', 'indexController@postContacts')->name('Contacts');
Route::group(array('prefix' => 'dashboard','as'=>'admin.'), function() {

    Route::get('/', 'admin\indexController@index')->name('layout.main');


    Route::resource('galleries', 'admin\galleryController');
    Route::resource('banners', 'admin\bannerController');
    Route::resource('users', 'admin\userController');
    Route::resource('contacts', 'admin\contactController');
    Route::resource('clients', 'admin\clientController');
    Route::resource('services', 'admin\serviceController');
    Route::resource('goals', 'admin\goalController');
    Route::resource('structures', 'admin\structureController');
    Route::get('/active/{id}', 'Admin\newController@active')->name('active_new');


    Route::resource('settings', 'admin\SettingController');

});
