<?php
session_start();
@include 'config.php';
require_once('../Model/usermodel.php');
if (isset($_SESSION['flag'])) {

    $conn = getConnection();
    $email = $_SESSION['email'];
    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    INCLUDE('../view/usernav.php');
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customer</title>
        <link rel="stylesheet" href="customer.css">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


    </head>

    <body>




        <center>
            <div class="welcome">
                <h1>Welcome <?= $row['usertype'] ?></h1>
            </div>

            <?php
            if (isset($_GET['message'])) { ?>
                <h3 class=""><?php echo $_GET['message']; ?></h3> <br>
            <?php } ?>

        </center>

        <section class="products"> <br>


            <center>
                <h1 class="heading">Latest products</h1>

            </center>

            <div class="box-container">

                <?php

                $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                if (mysqli_num_rows($select_products) > 0) {
                    while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                ?>

                        <form action="../controller/cartcontroller.php" method="post">
                            <div class="box">
                                <img src="../controller/uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                                <h3><?php echo $fetch_product['name']; ?></h3>
                                <div class="price"><?php echo $fetch_product['price']; ?> tk</div>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">

                                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                            </div>
                        </form>

                <?php
                    };
                };
                ?>

            </div>

        </section>

<!-- jquery ajax -->
        <section id="main">
            <script src="../Controller/customerquery.js"></script>
        </section>

    </body>

    <br> <br>
    <?php
    include('../view/footer.php');
    ?>

    </html>

<?php } ?>