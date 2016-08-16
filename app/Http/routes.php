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
    return view('lol.index');
});

Route::get('/info', function () {
    return view('lol.info');
});

// Team registration page
Route::post('/team/register', 'TeamController@register');
Route::get('/team/register', 'TeamController@formPage');

// Test
Route::any('/team/token', 'TeamEditController@generateToken');

// Dev
Route::get('/dev/teamlist', 'DevController@teamList');
Route::get('/dev/team/{id}', 'DevController@team');