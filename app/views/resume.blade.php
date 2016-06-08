@extends('layouts.master')

@section('title')
	Home Page
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
    <div class="row">
        <div class="col-md-12 top">
            <div class="row">
                <div class="col-md-12 headshot">
                    <img src="/img/new_headshot.jpg" class="img-circle" alt="Natalie Ortiz">
                </div>  
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="name">Natalie Ortiz</h1>
                    <p>Full-stack bootcamp graduate seeks entry into a software developer role while utilizing a business degree in Management Information Systems from the University of Notre Dame and 7+ years in the tech industry.
                    </p>
                </div>
            </div>
        </div>
    </div>
        
    <a id="aboutme"></a>
    <div class="objective row">
    <h1 class="about_me_heading">About Me</h1>
        <div class="row">
            <div class="col-md-12">
            <div class="row">
                <div class="about_me col-md-10 col-md-offset-1">
                <p>I am an aspiring web-developer who would like an entry level position in a team environment where I can grow my knowledge base and learn from senior developers.  I graduated with a degree in Management Information Systems from The University of Notre Dame.   However, my career after college went in a different direction.  Fortunately, Codeup has given me an opportunity to get back on track and prepare for that programming job I’ve always dreamed of.  During my time at Codeup, I’ve discovered that I have a passion for programming!  It can fun and frustrating all at the same time, but it’s such a great feeling when you are able to <a href="{{{ action('HomeController@showPortfolio') }}}">create something</a> entirely your own.  I prefer back-end development like Javascript and PHP but as you can see from my portfolio page, I can also do full-stack development just as well. </p> 
                <p>In my free time, I like traveling, eating out, spending time with family, cooking, watching British dramas and listening to music.  My preferred genres are pop & classic rock from the 60s and 70s as well as indie rock. </p> 
                <p>Having worked as a student manager for the Notre Dame Football Team, I love college football and to visit my alma mater for a home game.  I have made this an annual pilgrimage with family and friends to the beautiful campus I consider my second home.</p>    
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <div class="skills">
        <h2 class="skills_heading">Skills</h2>    
        <div class="row box_spacer">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                <div class="col-md-4">
                    <div class="skill_box">
                        <h3><strong>Front-End</strong></h3>
                        <p class="skill">HTML</p>
                        <p class="skill">CSS</p>
                        <p class="skill">Bootstrap</p>
                        <p class="skill">Javascript</p>
                        <p class="skill">JQuery</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill_box" >
                        <h3><strong>Back-end</strong></h3>
                        <p class="skill">PHP</p>
                        <p class="skill">MySQL</p>
                        <p class="skill">Laravel</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill_box">
                        <h3><strong>Soft Skills</strong></h3>
                        <div class="skill_list">
                            <p class="skill">Strong Work-ethic</p>
                            <p class="skill">Team Player</p>
                            <p class="skill">Organized</p>
                            <p class="skill">Coordinator</p>
                            <p class="skill">Detail-oriented</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="resume">
                        <a href="{{{link_to_asset('NatalieOrtizResume.pdf')}}}">Resume</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="education row">
        <div class="col-md-12">
            <div class="col-md-8">
                <h1>Education</h1>
                <div class="edutext">
                    <p>Graduate of the University of Notre Dame, Class of 2003</p>
                    <p>Bachelor of Business Administration in Management Information Systems</p>
                    <p>Student Manager of Notre Dame Fighting Irish Football</p>
                    <p>Member of the Monogram Club - Association of Former Student Athletes</p>
                </div>          
            </div>
            <div class="col-md-4">
                <img src="/img/ND.jpg" class="img-responsive notredame" alt="Notre Dame">
            </div>
        </div>
    </div>

    <div class="work">
        <h2 class="work_heading">Notable Work History</h2>    
            <div class="row">
                <div class="col-md-4 rackspace">
                    <img src="/img/rackspace_logo.png" alt="Rackspace" style="width:100px;">
                    <h3>Rackspace</h3>
                    <p>Talent Development Coordinator</p>
                    <p>Project Coordinator</p>
                    <p>Recruiting Coordinator</p>
                </div>
                <div class="col-md-4 apple">
                    <img src="/img/apple.png" alt="Apple" style="width:100px;">
                    <h3>Apple</h3>
                    <p>Mac Expert</p> 
                </div>                
                <div class="col-md-4 ventev">
                    <img src="/img/large_ventev.jpg" alt="Ventev" style="width:160px;">
                    <h3>Ventev</h3>
                    <p>Sales Support Rep</p>
                </div>
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