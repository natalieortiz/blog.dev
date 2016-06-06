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

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/whackaweenie', 'GameController@showWhack');

Route::get('/rolldice/{guess?}', 'GameController@rollDice');

Route::get('/simplesimon', 'GameController@showSimon');

Route::get('/weathermap', 'GameController@showWeather');

Route::get('/calculator', 'GameController@showCalculator');

Route::resource('posts', 'PostsController');

Route::get('orm-test', function ()
{
    $user1 = new User();
	$user1->email = 'ndnatalie@gmail.com';
	$user1->username  = 'ndnatalie';
	$user1->password = 'mypassword';
	$user1->save();

	$user2 = new User();
	$user2->email = 'ritawilbanks@yahoo.com';
	$user2->username  = 'ritawilbanks';
	$user2->password = 'password';
	$user2->save();

	$user3 = new User();
	$user3->email = 'jwpearc2@gmail.com';
	$user3->username  = 'jwpearc2';
	$user3->password = 'password';
	$user3->save();

});




