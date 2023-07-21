<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "escola";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//change character to 
	mysqli_set_charset($conn,"utf8");
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	
?>
