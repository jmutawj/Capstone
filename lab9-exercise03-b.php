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
	}
	
	if (isset($_POST['delete']) && isset($_POST['id']))
	{
		$id = get_post($conn, 'id');
		$query = "DELETE FROM patient WHERE id='$id' ";
		$result = $conn->query($query);
		if(!$result) echo "DELETE failed: $query,br." .
			$conn->error . "<br><br>";
	}
	
	if (isset($_POST['id'])  &&
	  isset($_POST['first_name'])  &&
      isset($_POST['last_name']) &&
      isset($_POST['phone_number']))
    {
	$id = get_post($conn, 'id');
    $first_name   = get_post($conn, 'first_name');
    $last_name = get_post($conn, 'last_name');
	$phone_number = get_post($conn, 'phone_number');
	
    $query = "INSERT INTO patient (id, first_name, last_name, phone_number)  VALUES" .
      "('$id', '$first_name', '$last_name', '$phone_number')";

    $result   = $conn->query($query);
    if (!$result) echo "INSERT failed: $query<br>" .
      $conn->error . "<br><br>";
    }
	
	echo <<<_END
	<form action="lab9-exercise03-b.php" method="post">
	<pre>
	<input type="hidden" name = "id"><br>
    first_name: <input type="text" name="first_name"><br>
	last_name: <input type="text" name="last_name"><br>
	phone_number: <input type="text" name="phone_number"><br>
	<input type="submit" name="submit" value="ADD RECORD">
	<input type="reset" name="reset" value="RESET FIELDS">
    </pre>
	</form>
_END;
	
	$query  = "SELECT * FROM patient";
	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);

	$rows = $result->num_rows;
	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
		
		echo <<<_END
		<pre>
		id $row[0]
        first_name $row[1]
		last_name $row[2]
		phone_number $row[3]
		</pre>
		  <form action="lab9-exercise03-b.php" method="post">
		  <input type="hidden" name="delete" value="yes">
		  <input type="hidden" name="id" value="$row[0]">
		  <input type="submit" value="DELETE RECORD"></form>
_END;
	}
	
	$result->close();	
	$conn -> close();
	
	function get_post($conn, $var)
	{
		return $conn->real_escape_string($_POST[$var]);
	}
?>
