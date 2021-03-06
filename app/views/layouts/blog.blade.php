<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	@yield('favicon')
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Pacifico|Raleway:400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/blog.css">


</head>
<body>
    <nav class="navbar navbar-default navstyle">
	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand"><a href="{{{ action('HomeController@showResume') }}}">Natalie Ortiz</a></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    </ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{{ action('HomeController@showResume') }}}"><i class="fa fa-home fa-lg"></i></a></li>
			<li><a href="{{{ action('PostsController@index') }}}"></i>All Posts</a></li>
			@if (!Auth::check()) 
				<li><a href="{{{ action('HomeController@loginForm') }}}">Login</a></li>
			@endif 
			@if (Auth::check()) 
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
				  <ul class="dropdown-menu">
				    <li><a href="{{{ action('PostsController@create') }}}">Create a Post</a></li>
				    <li role="separator" class="divider"></li>
				    <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
				  </ul>
				</li>
			@endif 
			<li>
			<form action="{{{ action('PostsController@index') }}}" class="navbar-form">
	        <div class="form-group">
	          <input type="text" class="form-control" name="q" placeholder="Search Posts">
	        </div>
	        <button type="submit" class="btn btn-default btn_search"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>
		</li>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

	@yield('content')

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Created by Natalie Ortiz</p>
      </div>
    </footer>


	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/9c1a80ab5c.js"></script>


</body>
</html>