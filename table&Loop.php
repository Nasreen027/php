<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table & Loop</title>
    <style>
        td{
            padding : 5px  10px;
        }
    </style>
</head>
<body>

<table border="3px" cellspacing="5px">
    <thead>
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
        <?php

        // for ($i=1; $i<=10; $i++){
        //     echo "<tr>".
        //     "<td>"."</td>".
        //     "<td>"."</td>".
        //     "<td>"."</td>".
        //     "</tr>";
        // }

    //     $i=1;
    //     while($i<=10){
    //     echo "<tr>".
    //     "<td>"."</td>".
    //     "<td>"."</td>".
    //     "<td>"."</td>".
    //     "</tr>";
    
    //     $i++;
    // }

    $i=1;
    do{
        echo "<tr>".
        "<td>"."</td>".
        "<td>"."</td>".
        "<td>"."</td>".
        "</tr>";
    }
    while($i>=10);
    $i++;
        ?>
    </tbody>
</table>
    
</body>
</html>