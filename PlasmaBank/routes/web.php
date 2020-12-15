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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['mildware' => ['auth','admin']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/role-reegister','Admin\DashboardController@registered');

    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/ role-delete/{id}','Admin\DashboardController@registerdelete');

    Route::get('/abouts','Admin\AboutusController@index');
    Route::post('/save-aboutus','Admin\AboutusController@store');
    Route::get('/about-us/{id}','Admin\AboutusController@edit');
    Route::put('/aboutus-update/{id}','Admin\AboutusController@update');
    Route::delete('/about-us-delete/{id}','Admin\AboutusController@delete');

    Route::get('/doners','Admin\DonerController@index');
    Route::post('/save-doner','Admin\DonerController@store');
    Route::get('/doner/{id}','Admin\DonerController@edit');
    Route::put('/doner-update/{id}','Admin\DonerController@update');

    Route::get('/receivers','Admin\ReceiverController@index');
    Route::post('/save-receiver','Admin\ReceiverController@store');

    
});


