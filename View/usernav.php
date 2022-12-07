<?php
@include '../model/config.php';

$select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
$row_count = mysqli_num_rows($select_rows);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="../View/header2.css">
</head>

<body>


    <nav class="navbar">

        <div class="ukash">

            <img id="logo" src="../View/images/vegetable.png" alt=""><br>
            <H1> Online Agro</H1>

        </div>

        <ul class="navlist">
            <li><a href="../View/home.php">Home</a></li>
            <li><a href="../view/profile.php">My profile</a></li>
            <li><a href="#main" id="feedback">Feedback</a></li>
            <li><a href="../view/cart.php">Cart <span class="cartcount"><?php echo $row_count; ?></span></a></li>
            <li><a href="../controller/logout.php">Logout</a></li>
        </ul>

    </nav>


</body>

</html>