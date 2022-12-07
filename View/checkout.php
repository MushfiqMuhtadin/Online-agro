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
    <title>checkout</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="cartss1.css">

</head>

<body>



    <div class="container">

        <section class="checkout-form">

            <center>
                <h1 class="order-heading">complete your order</h1>
            </center>
            <form action="../controller/cartcontroller.php" method="post">

                <div class="display-order">
                    <?php
                    $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                    $total = 0;
                    $grand_total = 0;
                    if (mysqli_num_rows($select_cart) > 0) {
                        while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                            $total_price = number_format($fetch_cart['price'] );
                            $grand_total = $total += $total_price;
                    ?>
                            <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
                    <?php
                        }
                    } else {
                        echo "<div class='display-order'><span>your cart is empty!</span></div>";
                    }
                    ?>
                    <span class="grand-total"> grand total : $<?= $grand_total; ?>/- </span>
                </div>

                <div class="flex">
                    <div class="inputBox">

                        <input type="text" placeholder="Name" name="name" required>
                    </div>
                    <div class="inputBox">

                        <input type="number" placeholder="Phone" name="number" required>
                    </div>
                    <div class="inputBox">

                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="inputBox">

                        <select name="method">
                            <option value="cash on delivery" selected>cash on delivery</option>
                            <option value="credit cart">credit card</option>
                            <option value="paypal">Bkash</option>
                        </select>
                    </div>
                    <div class="inputBox">

                        <input type="text" placeholder="House" name="flat" required>
                    </div>
                    <div class="inputBox">

                        <input type="text" placeholder="Street" name="street" required>
                    </div>
                    <div class="inputBox">

                        <input type="text" placeholder="City" name="city" required>
                    </div>
                    <div class="inputBox">

                        <input type="text" placeholder="State" name="state" required>
                    </div>
                    <div class="inputBox">

                        <input type="text" placeholder="Country" name="country" required>
                    </div>
                    <div class="inputBox">

                        <input type="text" placeholder="PIN code" name="pin_code" required>
                    </div>
                </div>
                <center><input type="submit" value="order now" name="order_btn" class="checkout-btn"></center>
            </form>

        </section>

    </div>



</body>

</html>
<?php } ?>