<?php

require "connect.php";

$name=$_POST["name"];
$dob=$_POST["dob"];
$city=$_POST["city"];
$country=$_POST["country"];
// var_dump($name,$city,$mobile);

$sql="INSERT INTO `yash` (`name`,`dob`,`city`,`country`) VALUES ('$name','$dob','$city','$country')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else 
  {
    echo "Error: <br>" . $conn->error;
  }
  
  $conn->close();



?>