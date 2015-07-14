<?php
/*
 * Downloaded from http://devzone.co.in
 */

$con = mysqli_connect("localhost","root","scootingly19934","mkfgdemo");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$user = $_COOKIE['userlogin'];
//moves picture uploaded to directory in public/ folde
$upload_dir = getcwd();
if (isset($_FILES["fileToUpload"])) { // it is recommended to check file type and size here
    if ($_FILES["fileToUpload"]["error"] > 0) {
        echo "Error: " . $_FILES["fileToUpload"]["error"] . "<br>";
    } else {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $upload_dir . "/" . $_FILES["fileToUpload"]["name"]);
		$sql = "UPDATE comments set image = '" . $_FILES["fileToUpload"]["name"] . "' where author = '$user' order by created_at desc limit 1";
		$result = mysqli_query($con, $sql);
        //echo "Uploaded File :" . $_FILES["fileToUpload"]["name"];
        //echo "<pre>";
        //print_r($_POST);
        //print_r($_FILES);
    }
}
//gets images for display in index.php
$sql = "Select id, image from comments order by comments.id";
$res = mysqli_query($con, $sql);
$img = "";
$id = "";
?>