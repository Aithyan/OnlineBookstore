<?php 
	// Database details
	$servername = "database-1.cr0lkyox2lnj.ap-south-1.rds.amazonaws.com";
	$username = "root";
	$password = "Test1234";
	$dbname = "test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>
