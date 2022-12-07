<?php
session_start();

if (isset($_SESSION['flag'])) {
    include('../view/header.php');
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>farmer</title>
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
                <h1> Pesticide</h1>
                <button id="pesticide">Go</button>
            </div>

            <div class="card">
                <h1>Farmer Inventory</h1>
                <button id="farmer-inventory">Go</button>
            </div>

            <div class="card">
                <h1>Crop status</h1>
                <button id="crop-status">Go</button>
            </div>

        </section>

        <section id="main">
            <script src="../Controller/farmerquery.js"></script>
        </section>

    </body>

    <br> <br>
    <?php
    include('../view/footer.php');
    ?>

    </html>

<?php } ?>