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
		<style>
			body 		{ padding-top:30px; }
			form 		{ padding-bottom:20px; }
		</style>
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
    				<input class = "btn btn-primary btn-lg" type = "submit" id = "login" value = "Login">
                    </div>
  				</form>
  			<h5>Don't have an account with us?</h5>
  				<input class = "btn btn-primary btn-lg" type="submit" value="Create Account" onClick = "location.href = 'frontend/CreateNewAccount.php'">
		</div>
	</body>
</html>