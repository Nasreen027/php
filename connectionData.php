<?php
include('connection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">



<?php

$query = $pdo->query("select * from products");
$result = $query->fetchAll(PDO::FETCH_ASSOC);


foreach($result as $faculty){
?>
<table>
    <tr>
        <td><?php echo $faculty['id'] ?></td>
        <td><?php echo $faculty['name'] ?></td>
        <td><?php echo $faculty['price'] ?></td>
        <td><?php echo $faculty['quantity'] ?></td>
         <td><a type='submit' class="btn btn-primary"
          href="update.php ?id=<?php echo $faculty['id']?>">Update</a></td>
    </tr>

<?php

} 

?>
     <tr><button><a href="insert.php">Insert</a></button></tr>
    </table>
    </div>
    
</body>
</html>


