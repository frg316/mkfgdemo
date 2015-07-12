<?php
	$con = mysqli_connect("localhost","root","scootingly19934","mkfgdemo");
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$number_of_days = 1;
	$date_of_expiry = time() + 60 * 60 * 24 * $number_of_days;
	
	if(isset($_REQUEST['firstname']) and isset($_REQUEST['lastname']) and isset($_REQUEST['email']) and 
	isset($_REQUEST['username']) and isset($_REQUEST['passwd']) and isset($_REQUEST['conpasswd'])){
		$firstname = $_REQUEST['firstname'];
		$firstname = trim($firstname);
		
		$lastname = $_REQUEST['lastname'];
		$lastname = trim($lastname);
		
		$email = $_REQUEST['email'];
		$email = trim($email);
		
		$username = $_REQUEST['username'];
		$username = trim($username);
		
		$password = $_REQUEST['passwd'];
		$password = trim($password);
		
		$conpasswd = $_REQUEST['conpasswd'];
		$conpasswd = trim($conpasswd);
		
		$sql = "SELECT * FROM user WHERE username = '$username';";
		$result = mysqli_query($con, $sql);
		if($row = mysqli_fetch_array ($result, MYSQL_ASSOC)){
			echo "<script>alert('That username already exists.  Please try again.');</script>";
		}
		else if(!strcmp($password, $conpasswd)==0){
			echo "<script>alert('The password does not match the confirm password.  Please try again.');</script>";
		}
		else{
			$password = password_hash($password, PASSWORD_BCRYPT);
			$sql = "INSERT INTO user(username, password, email, firstname, lastname) VALUES('$username', '$password', '$email', '$firstname', '$lastname');";
			$result = mysqli_query($con, $sql);
			//echo "<script>alert('Your account has successfully been created!  Welcome $username');
			setcookie("userlogin", $username, $date_of_expiry, "/");
			header("Location: ../laravel/public");
			die();
		}
	}
?>