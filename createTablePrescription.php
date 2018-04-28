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
	
	$conn-> query("CREATE TABLE prescription (
	prescription_id int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	prescription_name varchar(20) NOT NULL,
	prescription_dosage_mg int(10) NOT NULL,
	prescription_level int(6) NOT NULL,
	prescription_quantity int(3) NOT NULL,
	reminder_id int(6) NOT NULL
	)");
		
	$conn -> close();
?>
