<?php ob_start(); ?> 
<?php

$servername = "localhost";
$username = "root";
$password = "Patience1997";
$dbname = "finished_project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

} 


?>