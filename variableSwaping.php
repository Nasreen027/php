<?php
$a = 30;
$b = 50;
$c = $a;
// echo "a value is ".$a . "<br>" . "b value is " .$b ."<br>";
$a = $b;
$b = $c;
// echo "a value is " .$a ."<br>" . "b value is " .$b ."<br>";
?>
<?php
$a = 10;
$b = 20;
echo "a value is ".$a . "<br>" . "b value is " .$b ."<br>";
$a = $a+$b;
$b = $a-$b;
$a = $a-$b;
echo "a value is " .$a ."<br>" . "b value is " .$b;
?> 
