<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
</head>
<body>
    <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = $pdo->prepare("delete from products where id = :id");
        $query->bindParam("id",$id);
        $query->execute();
        echo "<div class='alert alert-success'>Data deleted successfully</div>";

    }
    ?>
</body>
</html>