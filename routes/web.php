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
    return view('home');
});

Route::group(['prefix' => 'admin'], function(){
	// Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');

	Route::resource('locations', 'LocationsController');
	Route::resource('sections', 'SectionsController');
	Route::resource('products', 'ProductsController');
});

