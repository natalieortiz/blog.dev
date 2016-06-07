<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function loginForm()
	{
		//Show form with 2 fields for submitting/loggin in
		
		//return form view

	}

	public function doLogin
	{	
		//Grab all input


		//Validate input fields

		//Attempt login
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    //flash message about sucessful login. 
		    return Redirect::intended('/');

		} else {
		    // login failed, go back to the login screen
		}


	}

	//GET
	public function doLogout()
	{
		Auth::logout();
		//Redirect
		//flash mesasge
	}

	
}
