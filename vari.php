<?php

//Global Scope
//Global variable are stored in $GLOABLS[] array.
//So We can also accesss them like $GLOBALS['name'], $GLOBALS['city']
$name="dheeraj";
$city="ganganager";
$country="india";

echo "my name is".$name;
echo "<br><br>";
echo "my name is" .$GLOBALS['name'];

function display()
{
    $color="red";
    //Local scope - Variable can be accessed only in this function
    GLOBAL $name, $city, $country;

    echo "<p style='color:$color;'>In Display Function My Name is $name</p>";
}

display();

?>

<h1> i live in <?php echo $city; ?></h1>
<h1> i live in <?php echo $country; ?></h1>