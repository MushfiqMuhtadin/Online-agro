<?php

@include '../Model/config.php';


if (isset($_POST['feedback'])) {
    $username= $_POST['username'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $opinion = $_POST['opinion'];

    $insert_query = mysqli_query($conn, "INSERT INTO `feedback`(username, email, country, opinion ) VALUES('$username', '$email', '$country', '$opinion')") or die('query failed');

    if ($insert_query) {

         header("location: ../View/customer.php?message=Feedback sent");

    } else {
        echo"error";
    }
};

?>
