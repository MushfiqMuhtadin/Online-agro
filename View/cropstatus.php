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

        <section class="addform">


            <form action="../Controller/farmercontroller.php" method="post" class="add-product-form" enctype="multipart/form-data">
                <h3>Crop status</h3>


                <input type="text" name="name" placeholder="enter Crop name" class="box" required>
                <div class="box">
                    <select name="status" required>
                        <option value="" disabled selected value>Enter Status</option>
                        <option value="On cultivation">On cultivation</option>
                        <option value="ready">ready</option>
                    </select>
                </div>
                <div class="box">

                    <select name="time" required>
                        <option value="" disabled selected value>Enter TIME</option>
                        <option value="ready">ready</option>
                        <option value="7 days">7 days</option>
                        <option value="15 days">15 days</option>
                        <option value="1 month">1 month</option>
                        <option value="3 month">3 month</option>
                        <option value="6 month">6 month</option>
                        <option value="1 year">1 year</option>
                    </select>
                </div>

                <input type="submit" value="Add crop status" name="crop" class="btn"> <br><br>
            </form>

        </section> <br><br><br><br>

        <center>
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