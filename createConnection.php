<?php
	$server = "localhost";
	$username = "root";
	$password = "w8rsUFwqbsFB";

	// Create connection
	$conn = new mysqli($server, $username, $password);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	echo "Connected successfully";
?>