
<?php

require_once('../Model/db.php');
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $conn = getConnection();
    $sql = "delete from users where id={$id}";

    $result = mysqli_query($conn, $sql);
    if ($result) {
?>
        
<?php
        header('location:../view/admin.php?message=User deleted');
    } else {
        echo "failed";
    }
}

?>