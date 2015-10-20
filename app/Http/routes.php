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
Route::get('/login/{type?}/{reference?}', 'MainController@login')
    ->where('type', '^-*[0-9,\.]+$')
    ->where('reference', '[A-Za-z\ ]+');
Route::get('/register', 'MainController@register');
Route::get('/details', 'MainController@details');
Route::get('/accommodation', 'MainController@accommodation');
Route::get('/attraction', 'MainController@attraction');
Route::get('/transport', 'MainController@transport');
Route::get('/accommodations/{reference?}', 'MainController@accommodations')
    ->where('reference', '[A-Za-z\ ]+');
Route::get('/attractions/{reference?}', 'MainController@attractions')
    ->where('reference', '[A-Za-z\ ]+');
Route::get('/pay', 'MainController@pay');
