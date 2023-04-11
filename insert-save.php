<?php

require "connect.php";

$name=$_POST["name"];
$city=$_POST["city"];
$mobile=$_POST["mobile"];
// var_dump($name,$city,$mobile);

$sql="INSERT INTO `personal` (`name`,`city`,`mobile`) VALUES ('$name','$city','$mobile')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else 
  {
    echo "Error: <br>" . $conn->error;
  }
  
  $conn->close();



?>