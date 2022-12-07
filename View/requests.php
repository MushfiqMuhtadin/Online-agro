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
        <link rel="stylesheet" href="../View/cropstatus.css">

    </head>

    <body>




        <div class="container">

            <center>
                <h1>Pesticide requests</h1> <br>
                <section class="display-product-table">

                    <table>

                        <thead>
                            <th> Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>

                        </thead>

                        <tbody>
                            <?php

                            $select_products = mysqli_query($conn, "SELECT * FROM `pesticide`");
                            if (mysqli_num_rows($select_products) > 0) {
                                while ($row = mysqli_fetch_assoc($select_products)) {
                            ?>
                                    <center>
                                        <tr>

                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><?php echo $row['quantity']; ?> </td>


                                            <td><a href="../controller/managercontroller.php?delete=<?php echo $row['id']; ?>" class="approve-btn" onclick="return confirm('are your sure you want to Approve this?');"> Approve </a></td>


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


    </body>

    </html>
<?php } ?>