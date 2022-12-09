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
        <link rel="stylesheet" href="../view/transaction.css">
        <title>Document</title>
    </head>

    <body>
        <br><br>
        <div class="container">

            <center>
                <h1>SALES</h1> 
                <section class="display-product-table">

                    <table>

                        <thead>
                            <th>Name</th>
                            <th>Number</th>
                            <th>email</th>
                            <th>method</th>
                            <th>Total product</th>
                            <th>Total price</th>


                        </thead>

                        <tbody>
                            <?php
                            
                            $total = 0;
                            $grand_total = 0;

                            $select_products = mysqli_query($conn, "SELECT * FROM `order`");
                            if (mysqli_num_rows($select_products) > 0) {
                                while ($row = mysqli_fetch_assoc($select_products)) {
                                    $total_price = $row['total_price'];
                                    $grand_total = $total += $total_price;


                            ?>
                                    <center>
                                        <tr>

                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['number']; ?></td>
                                            <td><?php echo $row['email']; ?> </td>
                                            <td><?php echo $row['method']; ?></td>
                                            <td><?php echo $row['total_products']; ?> </td>
                                            <td><?php echo $row['total_price']; ?> TK</td>

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

        </div><br>
        <center>
            <span class="grand-total"> Grand total Sale: <?=number_format($grand_total) ; ?> tk </span>

        </center>
    </body>

    </html>



<?php } ?>