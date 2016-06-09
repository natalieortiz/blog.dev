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
	@yield('css')
	@yield('fonts')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid navstyle">
        <div class="navbar-header navstyle">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand navstyle" id="myname">Natalie Ortiz</div>
        </div>
        <div id="navbar" class="collapse navbar-collapse navstyle">
            <ul class="nav navbar-nav navstyle">
                <li id="links"><a href="https://github.com/natalieortiz" title="Github"><i class="fa fa-github fa-lg"></i></a></li>
                <li id="links"><a href="http://www.linkedin.com/in/ndnatalie" title="LinkedIn"><i class="fa fa-linkedin fa-lg"></i></a></li>
            </ul>
                <ul class="nav navbar-nav navbar-right navstyle">
                    <li id="links"><a href="{{{ action('HomeController@showResume') }}}">Home</a></li>
                    <li id="links"><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
                    <li id="links"><a href="/files/NatalieOrtizResume.pdf">Resume</a></li>
                    <li id="links"><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<main class="container-fluid">
		@yield('content')
	</main>

	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>