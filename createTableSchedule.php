<?php
	$server = "localhost";
	$username = "root";
	$password = "w8rsUFwqbsFB";
	$db = "ForgetMedNot";

	// Create connection
	$conn = new mysqli($server, $username, $password, $db);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} echo "Connected successfully </br>";
	/*
	$conn->query("CREATE DATABASE ForgetMedNot");
	
	$sql = "SHOW DATABASES";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo $row["Database"]."\n";
	}
	*/
	
	$conn-> query("CREATE TABLE schedule (
	schedule_id int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	frequency int(2) NOT NULL,
	schedule_expires time (10) NOT NULL,
	schedule_time time(10) NOT NULL,
	date_activated time(10) NOT NULL
	)");
		
	$conn -> close();
?>
