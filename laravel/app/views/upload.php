<?php
/*
 * Downloaded from http://devzone.co.in
 */
 
$upload_dir = getcwd();
if (isset($_FILES["fileToUpload"])) { // it is recommended to check file type and size here
    if ($_FILES["fileToUpload"]["error"] > 0) {
        echo "Error: " . $_FILES["fileToUpload"]["error"] . "<br>";
    } else {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $upload_dir . "/" . $_FILES["fileToUpload"]["name"]);
        //echo "Uploaded File :" . $_FILES["fileToUpload"]["name"];
        //echo "<pre>";
        //print_r($_POST);
        //print_r($_FILES);
    }
}
?>