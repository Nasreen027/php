<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <?php
   /* $name = "ali";
    $green = "green";
    $red = "red";
    if($name == "ali"){
        echo "<h1 style='color:$green'> welcome ". $name ."</h1>";
    }
    else{
        echo "<h1 style='color:$red'>Name not matched</h1>";
    }*/
    ?>
    <?php
    global $name , $green , $red;
    $name  = "ali";
    $green = "green";
    $red = "red";
    if($name == "ali"){
        ?>
        <h1 style = 'color:<?php echo $green ?>'>Welcome <?php echo $name ?></h1>

        <?php
    }
    else{
?>
<h1 style= 'color:<?php echo $red ?>'>Name not matched</h1>
<?php
    };
    ?>
    <?php
    $name = 'sana';
    echo match($name){
        'ali' => 'user not found',
        'sana' => 'welcome '.$name,
    }
    
    ?>
    <?php
    echo match(8.0){
        '8.0' => "oh no!",
        8.0 => "this is what i expected",
    };
    ?>
    <?php
    $country=$session?->user?->getAddress()?->$country;
    
    ?>
</body>
</html>