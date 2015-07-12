<html>
	<title>Social Web App Demo</title>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
    	<?php
			require 'php/validate.php';
		?>
        	<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="frontend/loadingscreen.css">
		<style>
			body 		{ padding-top:30px; }
			form 		{ padding-bottom:20px; }
		</style>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    </head>
    <body>
    <h3>Welcome to Our Social Web App Demo</h3>
        <div id = "login">
  			<h5>For returning users, enter your username and password</h5>
  				<form method = "post">
                	<div class = "form-group">
    				<input class = "form-control input-sm" type = "text" id="username" name = "usernm" placeholder = "Username">
                    </div>
                    
    				<br/>
    				<p></p>
                    <div class = "form-group">
    				<input type = "password" id = "passwd" class = "form-control input-sm" name = "passwrd" placeholder = "Password">
                    </div>
                    
    				<br/>
                    <div class = "form-group">
    				<input class = "btn btn-primary btn-lg" type = "submit" id = "loginbutton" value = "Login">
                    </div>
  				</form>
  			<h5>Don't have an account with us?</h5>
  				<input class = "btn btn-primary btn-lg" id = "createaccount" type="submit" value="Create Account" onClick = "location.href = 'frontend/CreateNewAccount.php'">
		</div>
        <div id="slow_warning" style = "display:none">Loading...</div>
	</body>
        <script>		
			$(document).ready(function() {
				$("#loginbutton").click(function(){
					show_slow_warning();
				});
			});
			$(document).ready(function() {
				$("#createaccount").click(function(){
					show_slow_warning();
				});
			});
			
			function show_slow_warning(){
				$("#slow_warning").show();
			}			
		</script>
</html>