<?php


$name="dheeraj";
$city="ganganager";
$country="india";

echo "my name is".$name;
echo "<br>""<br>";
echo "my name is" .$GLOBALS[$'name'];


function display()
{$color="red";
    Global $name; $city, $country;
    echo "<p style='color:$color;'>In Display Fuunction My Name is $name</p>";
}

display();

?>
<h1> i live in <?php echo $city ?></h1>
<h1> i live in <?php echo $_COOKIE ?></h1>