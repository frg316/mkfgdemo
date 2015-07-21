<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Social Web App Demo</title>

	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
		.comment 	{ padding-bottom:20px; }
	</style>
	<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->
	<!-- ANGULAR -->
	<!-- all angular resources will be loaded from the /public folder -->
		<script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
		<script src="js/services/commentService.js"></script> <!-- load our service -->
		<script src="js/app.js"></script> <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="commentApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">

	<!-- PAGE TITLE -->
	<div class="page-header">
		<h2>Leave your comments below!</h2>
	</div>
	<strong>Check out what's currently toting!</strong>

	<a href="/maps">Interactive Maps</a></br></br>

	<!-- NEW COMMENT FORM -->
	<form ng-submit="submitComment()" method = "post"> <!-- ng-submit will disable the default form action and use our function -->
		<!-- COMMENT TEXT -->
		<div class="form-group">
			<input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text" placeholder="Say what you have to say">
		</div>
		<div class = "form-group">
			Choose a picture to upload!
			<input type ="file" class = "btn btn-primary btn-lg" name = "fileToUpload" ng-model ="commentData.image">
		</div>
		<!-- SUBMIT BUTTON -->
		<div class="form-group text-right">	
			<button type="submit" id = "submit" class="btn btn-primary btn-lg">Submit</button>
		</div>
	</form>

	<pre>
	@{{ commentData }}
	</pre>

	<!-- LOADING ICON -->
	<!-- show loading icon if the loading variable is set to true -->
	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

	<!-- THE COMMENTS -->
	<!-- hide these comments if the loading variable is true -->
	<div class="comment" ng-hide="loading" ng-repeat="comment in comments">
		<h3>Comment # @{{ comment.id }} <small>by @{{ comment.author }}</small></h3>
		<p> @{{ comment.text }}</p>
		<!--tries to take the image path and loop through each record after each iteration of angular, query tries to grab ones that weren't pulled already
		and loop through again, lol doesn't really work too well tho only displays the first image -->
		<p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>
	</div>
</div>
</body>
</html>
