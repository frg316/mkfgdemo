<html>
	<title>Social Web App Demo</title>
    <meta charset = "utf-8">
    <head>
    	<?php
			require '../php/newAcctVal.php';
		?>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<style>
			body 		{ padding-top:30px; }
			form 		{ padding-bottom:20px; }				
		</style>
    </head>
    <body>
    <h3>Create an account with us!</h3>
    	<div id = "wrapper">
			<div id = "inputs">
				<form name = "input" action = "#" method = "post">
				<p>
					First name: <input type = "text" name = "firstname" placeholder = "Your first name here..."><br/><br/>
					Last name: <input type = "text" name = "lastname" placeholder = "Your last name here..."><br/><br/>
					E-mail: <input type = "email" name = "email" placeholder = "Your e-mail address here..."><br/><br/>
					Username: <input type = "username" name = "username" placeholder = "Your desired username here..."><br/><br/>
					Password: <input type = "password" name = "passwd" class = "pass" placeholder = "Password"><br/><br/>
					Confirm Password: <input type = "password" name = "conpasswd" class = "pass" placeholder = "Password">
                    <br></br><br/>
                    <input type = "submit" value = "Submit" class = "submit">
                    <br></br><br/>
					<input type = "reset" onclick = 'reset()' value = "Reset Form">
				</p>
				</form>
			</div>
		</div>
    </body>
</html>