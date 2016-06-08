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
        <div class="col-md-12">
        <h1 class="mainheading">Portfolio</h1>
        <p>Below is a listing of projects I created during my time at Codeup.  Utilizing the full-stack curriculum, the projects below are made with HTML, CSS, Javascript and jQuery.  I will be adding additional projects created with MySQL and PHP as well. </p> 
        </div>  
    </div>

    <div class="projects">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{{ action('GameController@showCalculator') }}}" title="Calculator">
                    <img src="/img/calculator.png"></a>
                    <h3><a href="{{{ action('GameController@showCalculator') }}}">Javascript Calculator</a></h3>
                    <p>This is a javascript calculator similar to the Apple calculator.  The calculator uses logic and math functions in order to make calculations.  One notable difference is that this calculator performs the modulus function which is useful and common in programming.</p>
                </div>

                <div class="col-md-4">
                    <a href="{{{ action('GameController@showWeather') }}}" title="Weather Map">
                    <img src="/img/weathermap.png"></a>
                    <h3><a href="{{{ action('GameController@showWeather') }}}">Weather Map Site</a></h3>
                    <p>The user can find the 3-day weather forecast my dragging and dropping the map marker on any location.  This projects uses a Google Maps API in conjunction with a weather API in order to access weather information in any location.  A search function is also utilizes Google maps to geocode a location entered by the user.  
                    </p>
                 </div>
                <div class="col-md-4">
                    <a href="{{{ action('GameController@showSimon') }}}" title="Simple Simon">
                    <img src="/img/simplesimon.png"></a>
                    <h3><a href="{{{ action('GameController@showSimon') }}}">Simple Simon</a></h3>
                    <p>This game uses javascript to create a similar version of the popular Simon game from the 80s.  A random sequence is generated and the user copies that sequence by clicking on the corresponding squares.</p>
                </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                    <a href="{{{ action('GameController@showWhack') }}}" title="Whack-a-Weenie">
                    <img src="/img/whackaweenie.png"></a>
                    <h3><a href="{{{ action ('GameController@showWhack') }}}">Whack-a-Weenie</a></h3>
                    <p>A variation on a whack-a-mole style game where the user tries to click on as many "weenies" (dachshunds) as possible in order to get a high score.  A surprise pops up when a user gets the new high score.</p>
                </div>
                <div class="col-md-4">
                    <img src="/img/peddlers.png">
                    <h3>Peddler's Corner</h3>
                    <p>Co-led a team of 3 to create a Craigslist clone where users are able to login, create, edit and delete ads.  Users also have an account page to see all their current ads. I create an admin login as well to allow an admin full-control of ads shown. Used HTML, PHP, and MySQL develop this project. </p>
                </div>
                <div class="col-md-4">
                    <img src="/img/placeholder.jpg">
                    <h3>Future Project</h3>
                    <p>Future project coming soon.</p>
                </div>
            </div>
    </div>

    <div class="row footer contact">
        <div class="col-md-12">
             Natalie Ortiz |
             ndnatalie@gmail.com | 
            (210) 744-2384
        </div>
    </div>       
@stop	