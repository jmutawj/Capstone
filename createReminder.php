<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>StockTrade-Online Trading Platform</title>
  <meta content="width=device-width; initial-scale=1; maximum-scale=1" name="viewport">
  <link href="css/main.css" rel="stylesheet">
  <script src="js/validate.js">
  </script><!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  </head>
  <body>
<header> <a href="index.html" id="logo"></a>
    <nav> <a href="#" id="menu-icon"></a>
    <ul>
        <li> <a class="active" href="trade.php">Trade</a> </li>
        <li> <a href="recenttrades_new.php">Market</a> </li>
        <li> <a href="#">Services</a> </li>
        <li> <a href="#">Contact</a> </li>
        <li> <a href="#">Log In</a> </li>
      </ul>
  </nav>
  </header>
<div class="container">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$server   = "localhost";
$username = "root";
$password = "w8rsUFwqbsFB";
$dbname   = "ForgetMedNot";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo <<<_END
          <div class="main-content">


            <form action="createReminder.php" class="Form-Group" id="form" method="post" name="form">
          <h1>Submit a Trade</h1>
     <input type="hidden" name = "id"><br>
               <div class="Form-Group">
            <label><span>Last Name</span> <input id="last_name" name="last_name" value="$last_name"> </label>
          </div>
                 <div class="Form-Group">
            <label><span>First Name</span> <input id="first_name" name="first_name" value="$first_name"></label>
          </div>
                 <div class="Form-Group">
            <label><span>Phone Number</span> <input id="phone_number" name="phone_number" value="$phone_number"></label>
          </div>
             
             <div class="Form-Group">
                <button id="submit" name="submit" type="submit" value="submit" >Submit</button>
            </div>
             
              </form>
              </div>

        


_END;
if (isset($_POST['id']) && isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['phone_number'])) {
    $id       = get_post($conn, 'id');
    $last_name     = get_post($conn, 'last_name');
    $first_name   = get_post($conn, 'first_name');
    $phone_number   = get_post($conn, 'phone_number');
 
    
    
    if ($isValid != false) {
        $query = "INSERT INTO patient (id, last_name, first_name, phone_number) VALUES" . "('$id', '$last_name', '$first_name', '$phone_number')";
    }
    $result = $conn->query($query);
    if (!$result)
        echo "Failed to insert: $query<br />" . $conn->error . "<br /><br />";
}
$conn->close();
function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>
                </div>   
  </footer>
</body>
</html>