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
        <title></title>

        <!-- font awesome cdn link  -->

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../View/orders.css">

    </head>

    <body>




        <div class="container">

            <center>
                <h1>Pending Orders</h1> <br>
                <section class="display-product-table">

                    <table>

                        <thead>
                            <th>Name</th>
                            <th>Number</th>
                            <th>email</th>
                            <th>method</th>
                            <th>flat</th>
                            <th>street</th>
                            <th>city</th>
                            <th>country</th>
                            <th>pin code</th>
                            <th>Total product</th>
                            <th>Total price</th>
                            <th>Action</th>

                        </thead>

                        <tbody>
                            <?php

                            $select_products = mysqli_query($conn, "SELECT * FROM `order`");
                            if (mysqli_num_rows($select_products) > 0) {
                                while ($row = mysqli_fetch_assoc($select_products)) {
                            ?>
                                    <center>
                                        <tr>

                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['number']; ?></td>
                                            <td><?php echo $row['email']; ?> </td>
                                            <td><?php echo $row['method']; ?></td>
                                            <td><?php echo $row['flat']; ?></td>
                                            <td><?php echo $row['street']; ?> </td>
                                            <td><?php echo $row['city']; ?></td>
                                            <td><?php echo $row['country']; ?></td>
                                            <td><?php echo $row['pin_code']; ?></td>
                                            <td><?php echo $row['total_products']; ?> </td>
                                            <td><?php echo $row['total_price']; ?> TK</td>


                                            <td><a href="../controller/managercontroller.php?deleteorder=<?php echo $row['id']; ?>" class="approve-btn" onclick="return confirm('are your sure you want to Approve this?');"> Approve </a></td>


                                        </tr>
                                    </center>
                            <?php
                                };
                            } else {
                                echo "<div class='empty'>sorry</div>";
                            };
                            ?>
                        </tbody>
                    </table>

                </section>
            </center>
        </div>

    </body>

    </html>
<?php } ?>