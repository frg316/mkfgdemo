<!doctype html>
<!--https://github.com/markmarkoh/datamaps/blob/master/README.md#getting-started-->
<html>
<head>
<title>DataMaps</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
		body 		{ padding-top:-300px; }
		form 		{ padding-bottom:20px; }
		#basic_choropleth { padding-top: 20px; width: 800px; height:500px; }
		#basic_arcs { padding-top: 20px; width: 800px; height: 500px; }
		#projection_map { padding-top: 20px; width: 800px; height: 500px; }
	</style>
</head>
<body>

<h2>Some Cool Datamaps (courtesy of http://datamaps.github.io/)</h2></br>
<a href="index">Back to comment page</a>

<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="js/datamaps.world.min.js"></script>

<div id='basic_choropleth'><strong>Choropleth World Map:</strong></div>
<script src="js/choropleth.js"></script>

<div id='basic_arcs'><strong>Arcs:</strong></div>
<script src="js/arcs.js"></script>

<div id='projection_map'><strong>3-D Projection Map:</strong></div>
<script src="js/graticules.js"></script>

</body>
</html>