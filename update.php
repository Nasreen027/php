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
<div class="container">
<form action="" method='post'>
    <div class="form-group">
        <label for="">Id:</label>
        <input type="text" name='getId' class="form-control">
    </div>
    <div class="form-group">
        <label for="">Name:</label>
        <input type="text" name='getName' class="form-control">
    </div>
    <div class="form-group">
        <label for="">Price:</label>
        <input type="text" name='getPrice' class="form-control">
    </div>
    <div class="form-group">
        <label for="">Quantity:</label>
        <input type="text" name='getQuantity' class="form-control">
    </div>
    <button type='submit' name='updateBtn' class='btn btn-primary'>Update</button>
</form>
</div>

<?php
if(isset($_POST['updateBtn'])){
    $id = $_POST['getId'];
    $name = $_POST['getName'];
    $price = $_POST['getPrice'];
    $quantity = $_POST['getQuantity'];
    // $query = $pdo->
};
?>
    
</body>
</html>