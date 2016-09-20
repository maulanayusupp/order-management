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
	/*AUTHENTICATION*/
	Auth::routes();
	Route::get('/home', 'HomeController@index');

	/* ORDERKU */
	Route::resource('orderku', 'OrderkuController');

	/* KOMISIKU */
	Route::resource('komisiku', 'KomisikuController');

	/* ADMINISTRATOR AREA */
	Route::group(['prefix' => 'kelola'], function(){
		/* KELOLA ORDER*/
		Route::resource('order','OrderController');

		/* KOMISI */
		Route::get('komisi/atur',['as'=>'komisi.atur.daftar','uses'=>'KomisiController@komisi']);
		Route::resource('komisi','KomisiController');

		/* PEMBAGIAN KOMISI */
		Route::resource('pembagian-komisi','PembagianKomisiController');
	});
});


