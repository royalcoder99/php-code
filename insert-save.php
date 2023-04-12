<?php

require "connect.php";

$RollNo=$_POST["RollNo"];
$name=$_POST["name"];
$FathersName=$_POST["FathersName"];
$city=$_POST["city"];
// var_dump($name,$city,$mobile);

$sql="INSERT INTO `dhiraj` (`RollNo`,`name`,`FathersName`,`city`) VALUES ('$RollNo','$name','FathersName','$city')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else 
  {
    echo "Error: <br>" . $conn->error;
  }
  
  $conn->close();



?>