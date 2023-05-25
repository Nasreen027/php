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
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
</head>
<body>
     <?php
    if(isset($_GET["id"])){
        $id = $_GET['id'];
        $query = $pdo->prepare("SELECT * FROM products WHERE id=:id");
        $query->bindParam("id",$id);
        $query->execute();
        $data = $query->fetch(PDO::FETCH_ASSOC);
    }
    ?>
<div class="container">
<form action="" method='post'>
    <div class="form-group">
        <label for="">Name:</label>
        <input type="text" value="<?php echo $data['name'] ?>" name='getName' class="form-control">
    </div>
    <div class="form-group">
        <label for="">Price:</label>
        <input type="text" value="<?php echo $data['price'] ?>" name='getPrice' class="form-control">
    </div>
    <div class="form-group">
        <label for="">Quantity:</label>
        <input type="text" value="<?php echo $data['quantity'] ?>" name='getQuantity' class="form-control">
    </div>
    <button type='submit' name='updateBtn' class='btn btn-primary'>Update</button>
</form>
</div>

<?php
if(isset($_POST['updateBtn'])){
    $updateName = $_POST['getName'];
    $updatePrice = $_POST['getPrice'];
    $updateQuantity = $_POST['getQuantity'];
    $query = $pdo->prepare("update products set name=:name, price=:price, quantity=:quantity where id=:id");
    $query->bindParam('id',$id);
    $query->bindParam('name',$updateName);
    $query->bindParam('price',$updatePrice);
    $query->bindParam('quantity',$updateQuantity);
    $query->execute();
    echo "<div class='alert alert-success'>Product updated</div>";
}
?>
    
</body>
</html>
