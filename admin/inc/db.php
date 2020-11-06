<?php
	$db   = mysqli_connect("localhost","root","","lms");

	if ($db) {
		//echo "Connected Succesfully";
	}
	else{
		die("Connection Failed" . mysqli_error($db) );
	}
?>