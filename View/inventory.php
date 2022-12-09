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
    <title>admin panel</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../View/inventory.css">

</head>

<body>





    <div class="container">

        <section class="addform">


            <form action="../Controller/productcontroller.php" method="post" class="add-product-form" enctype="multipart/form-data">
                <h3>add a new product</h3>
                <input type="text" name="p_name" placeholder="enter the product name" class="box" required>
                <input type="number" name="p_price" min="0" placeholder="enter the product price" class="box" required>
                <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>

                <input type="submit" value="add the product" name="add_product" class="btn">
            </form>

        </section> <br><br><br><br>

        <center>
            <section class="display-product-table">

                <table>

                    <thead>
                        <th>product image</th>
                        <th>product name</th>
                        <th>product price</th>
                        <th>action</th>
                    </thead>

                    <tbody>
                        <?php

                        $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                        if (mysqli_num_rows($select_products) > 0) {
                            while ($row = mysqli_fetch_assoc($select_products)) {
                        ?>

                                <tr>
                                    <td><img src="../controller/uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['price']; ?> Tk</td>

                                    <td>
                                        <a href="../controller/productcontroller.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>

                                        <a href="updateproduct.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
                                        
                                    </td>
                                </tr>

                        <?php
                            };
                        } else {
                            echo "<div class='empty'>no product added</div>";
                        };
                        ?>
                    </tbody>
                </table>

            </section>
        </center>


</body>

</html>
<?php } ?>