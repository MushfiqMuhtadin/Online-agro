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
                <h1>Customer's feedback's</h1> <br>
                <section class="display-product-table">

                    <table>

                        <thead>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Feedback</th>

                        </thead>

                        <tbody>
                            <?php

                            $select_products = mysqli_query($conn, "SELECT * FROM `feedback`");
                            if (mysqli_num_rows($select_products) > 0) {
                                while ($row = mysqli_fetch_assoc($select_products)) {
                            ?>

                                    <tr>

                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['country']; ?> </td>
                                        <td><?php echo $row['opinion']; ?> </td>

                                    </tr>

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