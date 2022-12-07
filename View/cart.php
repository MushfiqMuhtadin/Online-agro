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
    <title>shopping cart</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../view/cartss1.css">

</head>

<body>
    <div class="container">

        <section class="shopping-cart">

            <center>
                <h1 class="heading">shopping cart</h1>
            </center>

            <table>

                <thead>
                    <th>image</th>
                    <th>name</th>
                    <th>price</th>
                    <th>total price</th>
                    <th>action</th>
                </thead>

                <tbody>

                    <?php

                    $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                    $grand_total = 0;
                    if (mysqli_num_rows($select_cart) > 0) {
                        while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                    ?>

                            <tr>
                                <td><img src="../controller/uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                                <td><?php echo $fetch_cart['name']; ?></td>
                                <td>$<?php echo number_format($fetch_cart['price']); ?>/-</td>
                                <td>$<?php echo $sub_total = number_format($fetch_cart['price']); ?>/-</td>
                                <td><a href="../controller/cartcontroller.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
                            </tr>
                    <?php
                            $grand_total = $grand_total + $sub_total;
                        };
                    };
                    ?>
                    <tr class="">
                        <td><a href="../View/customer.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
                        <td colspan="3">grand total= $<?php echo $grand_total; ?></td>

                        <td><a href="../controller/cartcontroller.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
                    </tr>

                </tbody>

            </table>

            <center>
              
                    <a href="../View/checkout.php" class="checkout-btn <?= ($grand_total > 1) ? '' : 'disabled'; ?>">procced to checkout</a>
                
            </center>

        </section>

    </div>

    </section>

    </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>
<?php } ?>