
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<?php

require "connect.php";

$sql="SELECT * from `personal`";

$result=$conn->query($sql);

echo "<table class='table table-striped'>".
     "<tr><th>scholarID</th><th>Name</th><th>City</th><th>Mobile</th></tr>";

while($row = $result->fetch_assoc()) 
{
    echo "<tr>".
         "<td>".$row['scholarID']."</td>".
         "<td>".$row['name']."</td>".
         "<td>".$row['city']."</td>".
         "<td>".$row['mobile']."</td>".
         "</tr>";
}
    echo "</table>";

?>

<a href="insert.php" class="btn btn-primary"> Back to Home Page </a>