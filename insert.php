<?php
include('connection.php');
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
    <form action="" method='post'>
        <div class="form-group">
            <label for="">Name:</label>
            <input type="text" class="form-control" name='insertName'>
        </div>
        <div class="form-group">
            <label for="">Price:</label>
            <input type="text" class="form-control" name='insertPrice'>
        </div>
        <div class="form-group">
            <label for="">Quantity:</label>
            <input type="text" class="form-control" name='insertQuantity'>
        </div>
        <button name='insertBtn' type='submit' class='btn btn-primary'>Insert</button>
    </form>
    </div>

    <?php
    if(isset($_POST['insertBtn'])){
        $name = $_POST['insertName'];
        $price = $_POST['insertPrice'];
        $quantity = $_POST['insertQuantity'];
        $query = $pdo->prepare("insert into products(name,price,quantity) values(:name, :price, :quantity)");
        $query->bindParam('name', $name);
        $query->bindParam('price', $price);
        $query->bindParam('quantity', $quantity);
        $query->execute();
        echo 'data successfully inserted';
    }
    ?>
</body>
</html>