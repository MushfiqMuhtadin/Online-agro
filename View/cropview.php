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
                <h1>Farmer's Crop Status</h1> <br>
                <section class="display-product-table">

                    <table>

                        <thead>
                            <th> Crop name</th>
                            <th>Status</th>
                            <th>will be ready In</th>

                        </thead>

                        <tbody>
                            <?php

                            $select_products = mysqli_query($conn, "SELECT * FROM `crop`");
                            if (mysqli_num_rows($select_products) > 0) {
                                while ($row = mysqli_fetch_assoc($select_products)) {
                            ?>

                                    <tr>

                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><?php echo $row['time']; ?> </td>

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