<?php

    $x = "I'm x";

function test(){

    global $y, $x;
    $y = "I'm y";

    echo $x . "<br>"; // we can access variable declared outside function by using global keyword

    echo $y . "<br>"; // we have to declare variable inside the function in order to access it
    //in function we can't access varibales outside the function
}
test();

echo $x //the variable we declare inside the function cannot be access outside the function

?>