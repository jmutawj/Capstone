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
	
	$conn-> query("CREATE TABLE facility (
	facility_id int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	facility_name varchar (50) NOT NULL,
	facility_address varchar (50) NOT NULL,
	facility_name int(10) NOT NULL
	)");
		
	$conn -> close();
?>
