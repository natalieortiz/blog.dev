@extends('layouts.master')

@section('title')
	Natalie's Portfolio
@stop 

@section ('favicon')
	<link rel="shortcut icon" href="/img/favicon-nat.ico">
@stop

@section('css')
	<link rel="stylesheet" href="/css/resume.css">
@stop

@section('fonts')
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic,600italic,700|Sorts+Mill+Goudy' rel='stylesheet' type='text/css'>
@stop 

@section('content')
	<div class="codestyle bg-1 row">
        <div class="col-sm-12">
        <h1 class="mainheading">Portfolio</h1>
        <p>Below is a listing of projects I created during my time at Codeup.  Utilizing the full-stack curriculum, the projects below are made with LAMP stack technologies - HTML, CSS, Javascript, jQuery, MySQL, PHP and Laravel Framework. 
        </div>  
    </div>
    <div class="col-sm-10 col-sm-offset-1 capstone">
    <a href="http://depthchartbuilder.com"><h2>Capstone Project: Depth Chart Builder</h2></a>
    <p>As part of a 3-person team, this was my final project at Codeup that was a culmination of the technologies I learned to design a web application.
    This application is designed to allow a professional basketball team to project their future roster and team salary obligations in a visually descriptive design.  My primary responsibilites were design and CSS, SQL queries, new player modals and player cards dynamically added to the page using jQuery and Javascript.</p> 

    <p>The user can add 4 types of players: custom, existing, free agent and a draft pick.  jQuery and ajax requests are used to access information from the database to build the HTML which can interact with the calculated numbers in the header without appending the databases.   A Javascript library is used to allow the user to drag and drop players between positions on the roster.  Laravel and SQL queries are used to access the correct records and teams using foreign keys to access each player's type and salary information.  Player dropdowns and color coding are adjusted according to player type and transactions available for that player.  The header dynamically adjusts to the depth chart shown to calculate total salaries, salary cap, player count, and tax information.  We were working with extensive amounts of information  with over 1,200 individual player records and over 64,000 fields of data throughout the entire database.<p>

    <p>Due to the confidential nature of the data in this project, the project had to exist in a private repository but demonstrations are available upon request. 
    </p>

    <div id="carousel-example-generic" class="carousel slide car_size" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>

  <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/img/Spurs.png" alt="Spurs roster">
                <div class="carousel-caption" style="color: black;">
                    <h3>Main Landing Page</h3>
                    <p>The main page defaults to the San Antonio Spurs roster.</p>
                </div>
            </div>
            <div class="item">
                <img src="/img/Cavs.png" alt="Cavaliers roster">
                <div class="carousel-caption" style="color: black;">
                    <h3>Cavaliers Team Page</h3>
                    <p>An example of the color-coding used for the player type.</p>
                </div>
            </div>
            <div class="item">
                <img src="/img/addCustom.png" alt="Add Custom Player Modal">
                <div class="carousel-caption">
                    <h3>Add Custom Player</h3>
                    <p>This modal allows you to add the different types of players to your roster including custom players.  </p>
                </div>
            </div>
            <div class="item">
                <img src="/img/addExisting.png" alt="Add Existing Player option">
                <div class="carousel-caption">
                    <h3>Add Existing Player</h3>
                    <p>This allows the user to access any player in the league to add to the current roster give that player's contract and salary.</p>
                </div>
            </div>
            <div class="item">
                <img src="/img/selectTeam.png" alt="Select Team Modal">
                <div class="carousel-caption" style="color: black;">
                </div>
            </div>
        </div>

  <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- end of carousel --}}
    <hr>
    <h2>Projects</h2>
    <div class="projects">
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{{ action('GameController@showCalculator') }}}" title="Calculator">
                    <img src="/img/calculator.png"></a>
                    <h3><a href="{{{ action('GameController@showCalculator') }}}">Javascript Calculator</a></h3>
                    <p>This is a javascript calculator similar to the Apple calculator.  The calculator uses logic and math functions in order to make calculations.  One notable difference is that this calculator performs the modulus function which is useful and common in programming.</p>
                </div>

                <div class="col-sm-4">
                    <a href="{{{ action('GameController@showWeather') }}}" title="Weather Map">
                    <img src="/img/weathermap.png"></a>
                    <h3><a href="{{{ action('GameController@showWeather') }}}">Weather Finder Map</a></h3>
                    <p>The user can find the 3-day weather forecast my dragging and dropping the map marker on any location.  This projects uses a Google Maps API in conjunction with a weather API in order to access weather information in any location.  A search function is also utilizes Google maps to geocode a location entered by the user.  
                    </p>
                 </div>
                <div class="col-sm-4">
                    <a href="{{{ action('GameController@showSimon') }}}" title="Simple Simon">
                    <img src="/img/simplesimon.png"></a>
                    <h3><a href="{{{ action('GameController@showSimon') }}}">Simple Simon</a></h3>
                    <p>This game uses javascript to create a similar version of the popular Simon game from the 80s.  A random sequence is generated and the user copies that sequence by clicking on the corresponding squares.</p>
                </div>
            </div>
            <div class="row">
               <div class="col-sm-4">
                    <a href="{{{ action('GameController@showWhack') }}}" title="Whack-a-Weenie">
                    <img src="/img/whackaweenie.png"></a>
                    <h3><a href="{{{ action ('GameController@showWhack') }}}">Whack-a-Weenie</a></h3>
                    <p>A variation on a whack-a-mole style game where the user tries to click on as many "weenies" (dachshunds) as possible in order to get a high score.  A surprise pops up when a user gets the new high score.  This site is designed to be played on a desktop or laptop.</p>
                </div>
                <div class="col-sm-4">
                    <a href="http://peddlerscorner.ndnatalie.com/"><img src="/img/peddlers.png"></a>
                    <h3><a href="http://peddlerscorner.ndnatalie.com/">Peddler's Corner</a></h3>
                    <p>Co-led a team of 3 to create a Craigslist clone where users are able to login, create, edit and delete ads.  Users also have an account page to see all their current ads. I create an admin login as well to allow an admin full-control of ads shown. Used HTML, PHP, and MySQL develop this project. </p>
                </div>
                <div class="col-sm-4">
                    <a href="{{{ action('PostsController@index') }}}"><img src="/img/blog.png"></a>
                    <h3><a href="{{{ action('PostsController@index') }}}">Personal Blog</a></h3>
                    <p>Using the PHP Laravel framework, this is a personal blog that incorporates account login and logout, creating, editing, and deleting a blog post, and a search bar at the top.  It also utilizes Twitter Bootstrap, HTML, and CSS.</p>
                </div>
            </div>
    </div>      
@stop	