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
    return view('welcome');
});

/*Route::get('/boys/search',function(){
    return view('boy.search');
});*/

Route::get('/boys/search', 'BoyController@search');

Route::resource('boys','BoyController');

Route::resource('observations','ObservationController');


