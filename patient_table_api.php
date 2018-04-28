<?php
	$server = "localhost";
    $username = "root";
    $password = "w8rsUFwqbsFB";
    $dbname = "ForgetMedNot";
    // Create connection
    $conn = new mysqli($server, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }        

  $query = "SELECT * FROM patient";
  $result = $conn->query($query);
  $rows = array();

  $numrows = $result->num_rows;
while ($row = $result->fetch_assoc()){
 $rows[] = $row;}
 
 

/for ($i = 0 ; $i < $numrows ; ++$i)
{
  $result->data_seek($i);
  $row = $result->fetch_array(MYSQLI_NUM);
  $rows[]=$row;
  
  }



  echo json_encode($rows);
    $result->close();
    $conn->close();
    function get_post($conn, $var) {
        return $conn->real_escape_string($_POST[$var]);
    }
?>