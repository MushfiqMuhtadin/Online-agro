<?php

@include '../Model/config.php';


if (isset($_POST['add_product'])) {
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'uploaded_img/' . $p_image;

    $insert_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');

    if ($insert_query) {
        move_uploaded_file($p_image_tmp_name, $p_image_folder);
       

        header("location: ../View/farmer.php?message=Product added to inventory");
    } else {
      
    }
};



if (isset($_POST['request'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
   

    $insert_query = mysqli_query($conn, "INSERT INTO `pesticide`(name, price, quantity) VALUES('$name', '$price', '$quantity')") or die('query failed');

    if ($insert_query) {
        header("location: ../View/farmer.php?message=Pesticide request sent");
    } 
    else {
        echo"failed";
    }
};


if (isset($_POST['crop'])) {
    $name = $_POST['name'];
    $status = $_POST['status'];
    $time = $_POST['time'];
   

    $insert_query = mysqli_query($conn, "INSERT INTO `crop`(name, status, time) VALUES('$name', '$status', '$time')") or die('query failed');

    if ($insert_query) {
        header("location: ../View/farmer.php?message=crop status added");
    } 
    else {
        echo"failed";
    }
};
?>
