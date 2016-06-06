<!DOCTYPE html>
<html>
<head>
	<title>Simple Simon</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Russo+One|Orbitron:400,900,700,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/simplesimon.css">

</head>
<body class="background">
<h1 class="heading">Simple Simon</h1>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-5">
			<div class="area" id="area">
					<div id="pink" class="pink"></div>
					<div id="green" class="green"></div>
					<div id="orange" class="orange"></div>
					<div id="blue" class="blue"></div>
			</div>
		</div>
			<div class="col-md-3">
				<div id="menu" class="menu">
					<div class="row">
						<button class="btn hover" id="go">Start</button>
					</div>
						<div class="row">
							<div class="score">
								<p><u><strong>Score</strong></u></p>
								<div id="scoreKeeper"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="col-md-1"></div>		
	</div>
	<div class="row">
		<p class="author">Created by Natalie Ortiz</p>
	</div>
</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="/js/simplesimon-js.js"></script>



</body>
</html>