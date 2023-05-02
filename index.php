<?php

$name = "ali";
$age = 20;

echo $name . $age ."<br>";
echo $name , $age . "<br>"; // echo accepts comma separation

var_dump($name . "<br>");
var_dump($name , $age ,"<br>"); // var_dump() accepts comma separation

print $name . "<br>";
print $name . $age;
// print $name , $age;  print method does'nt accept comma separation


?>
<h1><?php echo $name ?></h1>