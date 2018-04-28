<?php
	$server = "localhost";
	$username = "root";
	$password = "w8rsUFwqbsFB";

	// Create connection
	$conn = new mysqli($server, $username, $password);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} echo "Connected successfully </br>";
	
	$conn->query("CREATE DATABASE ForgetMedNot");
	
	$sql = "SHOW DATABASES";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo $row["Database"]."\n";
	}
	
	$conn -> close();
?>
