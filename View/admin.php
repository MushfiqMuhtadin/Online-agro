<?php
session_start();
require_once('../Model/usermodel.php');

include('../model/config.php');


if (isset($_SESSION['flag'])) {
    include('../view/header.php');
    $conn = getConnection();
    $email = $_SESSION['email'];
    $usertype = $_SESSION['usertype'];
    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" href="admin1.css">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



    </head>

    <body>
        <center>
            <div class="welcome">
                <h1>Welcome <?= $row['usertype'] ?></h1>
            </div>
            <?php
            if (isset($_GET['message'])) { ?>
                <h3 class=""><?php echo $_GET['message']; ?></h3> <br>
            <?php } ?>
        </center>
        <section class="main">


            <div class="card">
                <h1>Manage Users</h1>
                <button id="users">Go</button>
            </div>

            <div class="card">
                <h1>Inventory</h1>
                <button id="inventory">Go</button>
            </div>

            <div class="card">
                <h1>Sales</h1>
                <button id="transaction">Go</button>
            </div>

        </section>

        <section id="main">

            <script src="../Controller/adminquery.js"></script>
        </section>

    </body>

    <br> <br>
    <?php
    include('../view/footer.php');
    ?>

    </html>

<?php } ?>