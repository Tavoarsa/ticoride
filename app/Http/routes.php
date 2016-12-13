<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

	$rides= \DB::table('rides')->where('activo',true)->get();
    return view('home',compact('rides'));
});


Route::get('search_ride',[
	'as'=>'searchRide',
	'uses'=>'HomeController@search'
	]);

Route::auth();

Route::group(['middleware' => ['auth']], function () { 

Route::resource('ride','RideController');

Route::get('ride',[
	  'as'=>'ride-index',
	  'uses'=>'RideController@index'
	]);

Route::get('user/edit',[
	  'as'=>'user-edit',
	  'uses'=>'UserController@edit'
	]);

Route::resource('user','UserController');








});
