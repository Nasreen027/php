<?php
//method 1//
define("pi",3.142);
echo pi . "<br>";
?>
<?php
const blood = "O+";
// $blood = "O-";
echo blood . "<br>";
?>
<?php
function accessConstVariable(){
echo pi . "<br>"; //we can access const variable inside the function which has been declared outside the function but we can't access local variables
}
accessConstVariable();
?>
<?php
$num1 = 10;
$num2 = 20;
function creatingGlobalVariables(){
    global $num1,$num2;
    echo $num1+$num2;
}
creatingGlobalVariables();
?>