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
    <title>admin panel</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../View/inventory.css">

</head>

<body>





    <div class="container">

        <section class="addform">


            <form action="../Controller/farmercontroller.php" method="post" class="add-product-form" enctype="multipart/form-data">
                <h3>Request for pesticide</h3>
                <input type="text" name="name" placeholder="enter the pesticide name" class="box" required>
                <input type="number" name="price" min="0" placeholder="enter the pesticide price" class="box" required>
                <input type="number" name="quantity" placeholder="enter quantity" class="box" required>
                <input type="submit" value="Request" name="request" class="btn"> <br><br>
            </form>

        </section> <br><br><br><br>

        <center>
            <section class="display-product-table">

                <table>

                    <thead>
                        <th>pesticide name</th>
                        <th>pesticide price</th>
                        <th>pesticide Quantity</th>
                    </thead>

                    <tbody>
                        <?php

                        $select_products = mysqli_query($conn, "SELECT * FROM `pesticide`");
                        if (mysqli_num_rows($select_products) > 0) {
                            while ($row = mysqli_fetch_assoc($select_products)) {
                        ?>

                                <tr>
                                    
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['price']; ?> Tk</td>
                                    <td><?php echo $row['quantity']; ?> piece</td>
                                   
                                </tr>

                        <?php
                            };
                        } else {
                            echo "<div class='empty'>no product added</div>";
                        };
                        ?>
                    </tbody>
                </table>

            </section>
        </center>


</body>

</html>
<?php } ?>