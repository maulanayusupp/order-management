<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function () {
	Auth::routes();
	Route::get('/home', 'HomeController@index');

	Route::group(['prefix' => 'kelola'], function(){
		Route::resource('order','OrderController');
		Route::get('komisi/atur',['as'=>'komisi.atur.daftar','uses'=>'KomisiController@komisi']);
		Route::post('komisi/atur',['as'=>'komisi.atur','uses'=>'KomisiController@aturKomisi']);
		Route::resource('komisi','KomisiController');
	});
});


