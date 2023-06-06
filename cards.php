<?php
include 'query.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row mt-5">
<?php
if (isset($_SESSION['id'])) {
    $query = $pdo->query("SELECT * from products");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        ?>
        <div class="col-md-3">
            <div class="card">
                <img class='card-img-top' src="images/<?php echo $row['p_image'] ?>" alt="Mobile image">
                <div class="card-body">
                    <div class="card-title"><?php echo $row['p_name'] ?></div>
                    <div class="card-text"><?php echo $row['p_price'] ?></div>
                </div>
            </div>
        </div>
        <?php
}
    ?>
   </div>
<button class='btn btn-info mt-3'><a href="logout.php" class='text-light'>Logout</a></button>
<?php
}
else{
    header("location:login.php");
};
?>

</div>


</body>
</html>