<?php
session_start();
@include '../model/config.php';
if (isset($_SESSION['flag'])) {
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <link rel="stylesheet" href="inventory.css">
</head>

<body>
    <section class="edit-form-container">

        <?php

        if (isset($_GET['edit'])) {
            $edit_id = $_GET['edit'];
            $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
            if (mysqli_num_rows($edit_query) > 0) {
                while ($fetch_edit = mysqli_fetch_assoc($edit_query)) {
        ?>

                    <form action="../controller/productcontroller.php" method="post" enctype="multipart/form-data">
                        <h1>update product</h1>
                        <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
                        <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
                        <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
                        <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
                        <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
                        
                        <input type="submit" value="update " name="update_product" class="btn"><br>
                        <button class="cancel-btn"><a href="../view/admin.php">Cancel</a></button>
                        
                    </form>

        <?php
                };
            };
            echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
        };
        ?>

    </section>
</body>

</html>
<?php } ?>