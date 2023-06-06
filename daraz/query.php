<?php

session_start();
include("connection.php");

if(isset($_POST['loginBtn'])){
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $query = $pdo->prepare("SELECT * FROM users WHERE name = :name && password = :password");
    $query->bindParam(":name", $name);
    $query->bindParam(":password", $pass);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC); //fetch method returns single row
    if($result){
        $_SESSION['id'] = $result['id'];
        echo "<script>alert('Valid Data')</script>";
        header("Location:cards.php");

    }
    else{
        echo "<script>alert('Valid Data')</script>";
    }
}

//products
if(isset($_POST['addProduct'])){
    $prodName = $_POST['name'];
    $prodPrice = $_POST['price'];
    $prodCtg = $_POST['c_id'];
    $prodImage = $_FILES['image']['name'];
    $prodImageSize = $_FILES['image']['size'];
    $prodImageTmpName = $_FILES['image']['tmp_name'];
    $prodImageExt = pathinfo($prodImage,PATHINFO_EXTENSION);
    $destination = "images/".$prodImage;

    if($prodImageSize <= 4800000){
        if($prodImageExt == "jpg" || $prodImageExt == "jpeg" || $prodImageExt == "webp" || $prodImageExt == "png"){
            if(move_uploaded_file($prodImageTmpName,$destination)){
                $query = $pdo->prepare("insert into products(p_name, p_price, p_image, c_id) values (:name, :price, :image, :c_id)");
                $query->bindParam('name',$prodName);
                $query->bindParam('price',$prodPrice);
                $query->bindParam('image',$prodImage);
                $query->bindParam('c_id',$prodCtg);
                $query->execute();
                echo "<script>alert('product added successfully')</script>";
            }
            else{
                echo "<script>alert(product not added)</script>";
            };
        }
        else{
            echo "<script>alert('Invalid extension')
            location.assign('insert.php');
            </script>";
        };
    }
    else{
        echo "File size is greater";
    };
}

?>
<?php
// if(isset($_POST['loginBtn'])){
//     $userName = $_POST['name'];
//     $pass = $_POST['password'];

//     $_SESSION['std_name'] = $userName;
//     $_SESSION['std_pass'] =  $pass ;

//     $query = $pdo->query('select * from users where name = :name AND password = :password');
//     $data = $query->fetchAll(PDO::FETCH_ASSOC); 
//     if($data){
//         $_SESSION['name'] = $data['name'];
//         $_SESSION['password'] = $data['password'];
//         echo "successfully login";
//     }
//     else{
//         echo "user not found";
//     }

// }
?>
