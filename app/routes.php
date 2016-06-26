<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showResume');


Route::get('/home', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/whackaweenie', 'GameController@showWhack');

Route::get('/rolldice/{guess?}', 'GameController@rollDice');

Route::get('/simplesimon', 'GameController@showSimon');

Route::get('/weathermap', 'GameController@showWeather');

Route::get('/calculator', 'GameController@showCalculator');

Route::resource('posts', 'PostsController');

Route::get('/login', 'HomeController@loginForm');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@doLogout');

//For Capstone
Route::get('/dashboard', 'HomeController@showDashboard');




