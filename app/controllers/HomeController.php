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
		return View::make('login');

	}

	public function doLogin()
	{	
		//Grab all input
		$email = Input::get('email');
		$password = Input::get('password');

		//Validate input fields
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->fails()) {
			Session::flash('errorMessage','Email and Password are required.');
			return Redirect::back()->withInput();

		} else {
			//Attempt login
			if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			    Session::flash('successMessage','Login successful!'); 
			    return Redirect::intended('posts');
			} else {
				Session::flash('errorMessage','Login info is incorrect!');
			   return Redirect::back()->withInput();
			}
		}

	}

	//GET
	public function doLogout()
	{
		Auth::logout();
		Session::flash('successMessage','You are logged out.');
		return Redirect::action('HomeController@doLogin');
	}

	
}
