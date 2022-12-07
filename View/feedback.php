<?php
@include 'config.php';
session_start();
require_once('../Model/usermodel.php');
if (isset($_SESSION['flag'])) {

    $conn = getConnection();
    $email = $_SESSION['email'];
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
        <link rel="stylesheet" href="../view/feedback.css">
        <title>Document</title>
    </head>

    <body> <br><br>
        <center>
            <h1 class="feedback">Feedback</h1>
            <div class="container">

                <form action="../Controller/customercontroller.php" method="post">

                <label for="fname">Username</label>
                <input type="text" id="username" name="username" value="<?= $row['username'] ?>">

                    <label for="lname">Email</label>
                    <input type="text" id="email" name="email" value="<?= $row['email'] ?>">

                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" required>



                    <label for="subject">Opinion</label>
                    <textarea id="opinion" name="opinion" placeholder="Write something.." style="height:200px" required></textarea>

                    <input type="submit" name="feedback" value="Submit">

                </form>
            </div>
        </center>
    </body>

    </html>

<?php } ?>