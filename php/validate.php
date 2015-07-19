<?php
	//connect and build time for cookies
	$number_of_days = 1;
	$date_of_expiry = time() + 60 * 60 * 24 * $number_of_days;
	$count = 0;

	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$count = getCount();
	if($count > 9){
		header("Location: php/lockout.php");
		die();
	}

	function getCon(){
		try{
			$con = null;
	    	if (is_null($con)) {
	        	$con = new mysqli("localhost","root","scootingly19934","mkfgdemo");
	    	}
	    	return $con;
    	}
    	catch(Exception $e){
    		echo 'Message from con: ' .$e->getMessage();
    		return null;
    	}
	}

	function getCount(){
		try{
			$con = getCon();
			$count = 0;
			$address = $_SERVER['REMOTE_ADDR'];
			$sqlcount = 'SELECT COUNT(*) FROM loginattempts WHERE (datetime > now() - INTERVAL 5 MINUTE) AND address = ?';
			if ($stmt2 = $con->prepare($sqlcount)){
				$stmt2->bind_param("s", $address);
				$stmt2->execute();
				$stmt2->bind_result($eventLogID);
				if($stmt2->fetch()){
					$count = $eventLogID;
				}
				$stmt2->close();
			}
			return $count;
		}
		catch(Exception $e){
			echo 'Message from count: ' .$e->getMessage();
			return 0;
		}
	}

	function insertAttempt($address){
		try{
			$con = getCon();
			$stmt3 = $con->prepare("INSERT INTO loginattempts(address, datetime) VALUES(?, CURRENT_TIMESTAMP)");
			$stmt3->bind_param("s", $address);
			$stmt3->execute();
			$stmt3->close();
		}
		catch(Exception $e){
			echo 'Message from attempt: ' .$e->getMessage();
		}
	}

	function getPword($username, $password){
		try{
			$sql = 'SELECT password FROM user WHERE username = ?';
			$con = getCon();
			if($stmt = $con->prepare($sql)) {
				$stmt->bind_param("s", $username);
				$stmt->execute();
				$stmt->bind_result($eventLogID);
				if($stmt->fetch()){
					return $eventLogID;
				}
				else{
					$stmt->close();
					return null;
				}
			}
			$stmt->close();
			return null;
		}
		catch(Exception $e){
			echo 'Message from getp: ' .$e->getMessage();
			return null;
		}
	}

	try{
	//validation for the username and password combination
		if(isset($_REQUEST['passwrd']) and isset($_REQUEST['usernm'])){
			$username = $_REQUEST['usernm'];
			$username = trim($username);
			
			$password = $_REQUEST['passwrd'];
			$password = trim($password);

			$address = $_SERVER['REMOTE_ADDR'];
			$pword = getPword($username, $password);

			if(password_verify($password, $pword)) {
				setcookie("userlogin", $username, $date_of_expiry, "/");
				header("Location: laravel/public");
				die();
			}
			else{
				echo "<script>alert('Incorrect password.  Please try again.');</script>";
				insertAttempt($address);
			}
		}
	}
	catch(Exception $e){
		echo 'Message: ' .$e->getMessage();
	}

?>
