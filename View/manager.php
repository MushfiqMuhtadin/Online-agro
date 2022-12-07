<?php
session_start();
require_once('../Model/usermodel.php');
if (isset($_SESSION['flag'])) {

    $conn = getConnection();
    $email = $_SESSION['email'];
    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    include('../view/header.php');
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>manager</title>
        <link rel="stylesheet" href="admin1.css">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


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
                <h1>Requests</h1>
                <button id="request">Go</button>
            </div>

            <div class="card">
                <h1>Orders</h1>
                <button id="order">Go</button>
            </div>

            <div class="card">
                <h1>Feedbacks</h1>
                <button id="feedback">Go</button>
            </div>
            <div class="card">
                <h1>crop status</h1>
                <button id="crop">Go</button>
            </div>

        </section><br><br><br><br>

        <section id="main">
            <script src="../Controller/managerquery.js"></script>
        </section>

    </body>

    <br> <br>
    <?php
    include('../view/footer.php');
    ?>

    </html>

<?php } ?>