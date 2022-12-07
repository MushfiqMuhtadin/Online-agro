<?php
include '../view/homenav.php';
include '../model/config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/home1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700">
    <title>Home</title>
</head>

<body>



    <section class="products"> <br>



        <div class="container">
            <div class="typewriter">Welcome to Online agro where you can buy 100% Organic fresh groceries</div>
        </div>
        
        <br>

        <center>
            <h1>Our Products</h1>
        </center><br>
        <div class="box-container">


            <?php

            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if (mysqli_num_rows($select_products) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_products)) {
            ?>

                    <form>
                        <div class="box">
                            <img src="../controller/uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                            <h3><?php echo $fetch_product['name']; ?></h3>
                            <div class="price"><?php echo $fetch_product['price']; ?>tk</div>
                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                            <button class="btn"><a href="../view/login.php">Buy</a></button>
                        </div>
                    </form>

            <?php
                };
            };
            ?>

        </div>

    </section><br><br>

    <center>
        <h3> We provide doorstep delivery. contact +9998481101 or order on our website</h3>
    </center>






    <?php
    include '../view/footer.php';
    ?>

</body>

</html>