<html>
	<title>Social Web App Demo</title>
    <meta charset = "utf-8">
    <head>
    	<?php
			require '../php/newAcctVal.php';
		?>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
		<style>
			body 		{ padding-top:30px; }
			form 		{ padding-bottom:20px; }				
		</style>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    </head>
    <body>
    <h3>Create an account with us!</h3>
    	<div id = "wrapper">
			<div id = "inputs">
				<form name = "input" action = "#" method = "post">
				<p>
                <div class = "form-group">
					First name: <input type = "text" id = "fname" class = "form-control input-sm" name = "firstname" placeholder = "Your first name here..."><br/>
                </div>
                <div class = "form-group">
					Last name: <input type = "text" id = "lname" class = "form-control input-sm" name = "lastname" placeholder = "Your last name here..."><br/>
                </div>
                <div class = "form-group">
					E-mail: <input type = "email" id = "mail" class = "form-control input-sm" name = "email" placeholder = "Your e-mail address here..."><br/>
                </div>
                <div class = "form-group">
					Username: <input type = "username" id = "uname" class = "form-control input-sm" name = "username" placeholder = "Your desired username here..."><br/>
                </div>
                <div class = "form-group">
					Password: <input type = "password" id = "pword" class = "form-control input-sm" name = "passwd" placeholder = "Password"><br/>
                </div>
                <div class = "form-group">
					Confirm Password: <input type = "password" id = "pword2" class = "form-control input-sm" name = "conpasswd"  placeholder = "Password">
                </div>
                    <br>
                <div class = "form-group">
                    <input type = "submit" id = "createaccount" class = "btn btn-primary btn-lg" value = "Submit" onClick = "return checkValues();">
                </div>
                    <br>
                <div class = "form-group">
					<input type = "reset" class = "btn btn-primary btn-lg" onclick = 'reset()' value = "Reset Form">
                </div>				
				</form>
			</div>
		</div>
    </body>	
    <script type= "text/javascript">
	function checkValues(){
		if(document.getElementById('fname').value == "" 
		|| document.getElementById('lname').value == ""
		|| document.getElementById('mail').value == ""
		|| document.getElementById('uname').value == ""
		|| document.getElementById('pword').value == ""
		|| document.getElementById('pword2').value ==""){
			   alert("You didn't type in anything for one of the boxes.  Please try again.");
			   return false;
		   }
		   return true;
	}
	</script>
</html>