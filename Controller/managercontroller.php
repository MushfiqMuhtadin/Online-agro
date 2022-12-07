<?php
include'../model/config.php';

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `pesticide` WHERE id = $delete_id ") or die('query failed');
    if ($delete_query) {
        header('location: ../view/manager.php?message=product request approved successfully.  Will contact farmer soon');
    } else {
        header('location: ../view/manager.php?message=product not approved');
    };
};
if (isset($_GET['deleteorder'])) {
    $delete_id = $_GET['deleteorder'];
    $delete_query = mysqli_query($conn, "DELETE FROM `order` WHERE id = $delete_id ") or die('query failed');
    if ($delete_query) {
        header('location: ../view/manager.php?message=Order confirmed. Will deliver soon');
    } else {
        header('location: ../view/manager.php?message=product not approved');
    };
};


?>