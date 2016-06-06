<!DOCTYPE html>
<html>
<head>
	<title>Weather Map</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/weather_map.css">
    <link href='https://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
</head>
<body class="body">
<div class="container-fluid">
	<div class="row">
			<div class="header col-md-12">Weather Forecast Anywhere<img src="/img/rainbow.png"></div>
	</div>
	<div class="row">
	<div class="col-md-10 col-md-offset-1 blank">
		<div class="row">
			<div class="col-md-12">
				<div id="city_name" class="city_name"></div>
				<div id="forecast"></div>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="map-canvas"></div>
				<div class="lat_long">
				<form class="form-inline" id="search_form">
					<p class="header_text bold">Drag the marker to a location to find the weather.</p>
					<div class="form-group search_class">
						<label for="location" class="header_text bold">Or Search for a Location:</label>
					    <input type="text" class="text_box" placeholder="Enter Location" id="location">
					    <button type="submit" class="btn btn-default btn-success" id="search">Find Location</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 footer">
			<p>Created by Natalie Ortiz</p>
		</div>
	</div>
</div>
<!-- Load the Google Maps API [DON'T FORGET TO USE A KEY] -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWs1sfMFNDNq25WBVzAKE0T3ARtpG0RA4"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="/js/weather_map.js"></script>

</body>
</html>