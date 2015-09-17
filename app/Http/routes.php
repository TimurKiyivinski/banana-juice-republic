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

Route::get('/', 'MainController@index');
Route::get('/login', 'MainController@login');
Route::get('/register', 'MainController@register');
Route::get('/accommodation', 'MainController@accommodation');
Route::get('/attraction', 'MainController@attraction');
Route::get('/accommodations', 'MainController@accomodations');
Route::get('/attractions', 'MainController@attractions');
Route::get('/pay', 'MainController@pay');
