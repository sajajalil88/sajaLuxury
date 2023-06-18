<?php
$servername = "localhost:3308";
$username = "root";
$password = "myPassword";
$dbname = "webb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: ");
}

//echo "Connected successfully";
?>
