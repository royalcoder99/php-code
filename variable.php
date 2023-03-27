<?php

//Global Scope
//Global variable are stored in $GLOABLS[] array.
//So We can also accesss them like $GLOBALS['name'], $GLOBALS['city']
$name="Pankaj";
$city="Anupgarh";


echo "My Name is ".$name;
echo "<br><br>";
echo "My Name is ".$GLOBALS['name'];

function display()
{
    $color="green";
    //Local scope - Variable can be accessed only in this function
    GLOBAL $name, $city;
    echo "<p style='color:$color;'>In Display Fuunction My Name is $name</p>";
}

display();

echo "After Display function, show again global My Name is ".$student;
?>


<h1>I live in <?php echo $city; ?></h1>