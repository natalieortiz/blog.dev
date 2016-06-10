@extends('layouts.games')

@section('title')
	Whack-a-Weenie
@stop

@section ('favicon')
	<link rel="shortcut icon" href="">
@stop

@section('css')
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/whack-css.css">
@stop

@section('fonts')
	<link href='https://fonts.googleapis.com/css?family=Bangers|Acme|Permanent+Marker' rel='stylesheet' type='text/css'>
@stop 

@section('content')
<!-- Modal -->
<div class="modal fade" id="dogModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal_style">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="myModal"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">You Got a New High Score!</h4>
      </div>
      <div class="modal-body">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VOcBI-fbDVo" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer modal_style">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- body html -->
<div class="container-fluid background">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<div class="heading">
			<h1>Whack-a-Weenie</h1>
			<p>(weenie dog!)</p>
		</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-3">
			<div class="row">
				<div class="col-sm-xs-6 col-offset-xs-3 col-sm-3">
				<button type="button" class="btn btn-primary btn-lg btn-success player_button" id="start">Start</button>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-offset-xs-3 col-sm-3">
				<button type="button" class="btn btn-primary btn-lg btn-danger player_button" id="quit">Quit</button>
				</div>
			</div>
			<div class="display">
				<div class="score">
					<h3>Score</h3>
					<div class="scorekeeper" id="scoreKeeper">0</div>
				</div>
				<div class="score">
					<h3>Timer</h3>
					<div class="timer" id="timer">30</div>
				</div>
			</div>
		</div>
		<div class="col-xs-8 col-sm-8 col-md-6">
			<div id="area">
					<div class="hole" id="1"></div>
					<div class="hole" id="2"></div>
					<div class="hole" id="3"></div>
					<div class="hole" id="4"></div>
					<div class="hole" id="5"></div>
					<div class="hole" id="6"></div>
					<div class="hole" id="7"></div>
					<div class="hole" id="8"></div>
					<div class="hole" id="9"></div>
			</div>
		</div>
		<div class="col-xs-12 col-md-3">
			<div class="high_score">
				<h3>High Score</h3>
				<div id="high_score"></div>
			</div>
			<div class="doghouse">
				<img src="/img/dog house.png">
			</div>
		</div>
	</div>
</div>
<div class="row">

</div>

<footer>
	<div class="green">
			<p>Created by Natalie Ortiz</p>
	</div>
</footer>
@stop


@section('bottom-script')
	<script src="/js/whackamole.js"></script>
@stop

