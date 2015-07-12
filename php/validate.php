<?php
	//connect and build time for cookies
	$con = mysqli_connect("localhost","root","scootingly19934","mkfgdemo");
	$number_of_days = 1;
	$date_of_expiry = time() + 60 * 60 * 24 * $number_of_days;
	
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	//validation for the username and password combination
	if(isset($_REQUEST['passwrd']) and isset($_REQUEST['usernm'])){
		$username = $_REQUEST['usernm'];
		$username = trim($username);
		
		$password = $_REQUEST['passwrd'];
		$password = trim($password);
		
		$sql = "SELECT * FROM user WHERE username = '$username';";
		$result = mysqli_query($con, $sql);
		if($row = mysqli_fetch_array ($result, MYSQL_ASSOC))
			if(password_verify($password, $row['password'])){
				setcookie("userlogin", $username, $date_of_expiry, "/");
				header("Location: laravel/public");
				die();
			}
			else{
				echo "<script>alert('Incorrect password.  Please try again.');</script>";
			}		
		else{
			echo "<script>alert('The username/password combination is incorrect.  Please try again');</script>";
		}
	}
?>
