<?php

$servername = "db4free.net";
$username = "sharma249";
$password = "#geet249";
$database = "student1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: ". mysqli_connect_error());
}
// else 
// echo "Connected successfully";
?>