<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop Task</title>
</head>
<body>
<table>
    <thead>
<?php
$col = 2;
$row = 3;
for($i= 1; $i <= $col; $i++){
    ?>
    <tr>
        <th></th>
    </tr>
    </thead>
    <tbody> 
    <?php
    for($j= 1 ; $j <= $row; $j++){
        ?>
        <tr>
            <td></td>
        </tr>
        <?php
    }
}
?>
 </tbody>
</table>
    
</body>
</html>