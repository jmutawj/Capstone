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
	
	$conn-> query("CREATE TABLE user (
	user_id int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	first_name varchar(20) NOT NULL,
	last_name varchar(20) NOT NULL,
	email_address varchar(50) NOT NULL,
	position_title varchar(50) NOT NULL,
	facility_id int(6) NOT NULL
	)");
		
	$conn -> close();
?>
