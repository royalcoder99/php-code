<?php

$name=$_GET['name'];
$city=$_GET['city'];
$color=$_GET['color'];
$fontisze=$_GET['fontisze'];
echo "<body style='color:$color;font-size:$fontisze'>";
echo "<h1>Hello! I am ".$name."</h1>";
echo "<p>I live in ".$city."</p>";

?>

<p> hello this is test</p>

<?php

echo "this is global city variablae value is $city";
echo "</body>";
?>
