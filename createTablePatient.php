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
	
	$conn-> query("CREATE TABLE patient (
	id int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	first_name varchar(20) NOT NULL,
	last_name varchar(20) NOT NULL,
	phone_number int(10) NOT NULL,
	schedule_id int(6) NOT NULL,
	prescription_id int(6) NOT NULL,
	reminder_id int(6) NOT NULL
	)");
		
	$conn -> close();
?>
