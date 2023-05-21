<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter file name:</label>
        <input type="text" name="ext" id="">
        <input type="submit" name="sub" id="">
    </form>
    <?php
    //it will return extension of the file
    if(isset($_POST['sub'])){
        $extension = $_POST['ext'];
        $exploding = explode(".",$extension);
        // $file_ext = $exploding[count($exploding)-1];
        $file_ext = $exploding[array_key_last($exploding)];
        echo $file_ext;
    }
    // it will return last name
    if(isset($_POST['sub'])){
        $extension = $_POST['ext'];
        $exploding = explode(' ', $extension);
        $file_ext = $exploding[array_key_last($exploding)];
        echo $file_ext;
    }
    ?>
</body>
</html>