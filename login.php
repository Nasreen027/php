<?php
include("query.php");
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
    <form method="post" action="">
        <div class="form-group">
            <label for="">Name:</label>
            <input type="text" name='name' class="form-control">
        </div>
        <div class="form-group">
            <label for="">Password:</label>
            <input type="text" name='password' class="form-control">
        </div>
        <button class='btn btn-primary' name='loginBtn'>Login</button>
    </form>
</div>
    
</body>
</html>