<?php

class PostsController extends \BaseController {

	public function __construct()
    {
        $this->beforeFilter('auth', array(
        	'except' => array(
        		'index' , 
        		'show'
        	)
        ));

        $this->beforeFilter('auth.admin', 'only' => 'destroy');

    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$posts = Post::paginate(4); 

		//If you want to use eager loading; 
		// $posts = Post::with('User')->get();

		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	

		$validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage','Something was wrong with your input.');
	        return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	        // validation succeeded, create and save the post
			//Create a new instance of Post.
			$post = new Post();
    		$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->categories = Input::get('categories');
			//$post->user_id = User::first()->id; if you have a foreign key

			if($post->save()){
				Session::flash('successMessage','Post was saved successfully!');
				return Redirect::action('PostsController@show', $post->id);
			} else {
				Session::flash('errorMessage','Post was not saved.');
				return Redirect::back()->withInput();
			}

	    }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	
		try {
			$post = Post::findOrFail($id);
			return View::make('posts.show')->with('post', $post);
		} catch (Exception $e) {
			App::abort(404);
		}

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage','Fill out all fields.');
	        return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	        // validation succeeded, create and save the post

			//Find the post to update.
			$post = Post::find($id);
    		$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->categories = Input::get('categories');
			//$post->user_id = User::first()->id; if you have a foreign key

			if($post->save()){
				Session::flash('successMessage','Post was saved!');
				return Redirect::action('PostsController@show', $post->id);
			} else {
				Session::flash('errorMessage','Post was not saved.');
				return Redirect::back()->withInput();
			}

	    }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		Session::flash('successMessage','Post was successfully deleted.');
		return Redirect::action('PostsController@index');	
	}

}
