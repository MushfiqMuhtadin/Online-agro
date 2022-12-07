<?php
session_start();
require_once('../Model/usermodel.php');
require_once('../Model/config.php');

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
        <title>profile</title>
        <link rel="stylesheet" href="../View/profile1.css">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">



    </head>

    <body>

        <div class="card">

            <div class="">
                <center>
                    <h1>Profile</h1>
                </center><br>
                <h2>Username : <span id="hoho"><?= $row['username'] ?></span> </h2>
                <h2>Email : <span id="hoho"><?= $row['email'] ?></span> </h2>
                <h2>Phone : <span id="hoho"><?= $row['phone'] ?></span> </h2>
                <h2>Date of birth: <span id="hoho"> <?= $row['dob'] ?></span> </h2>
                <h2>Address: <span id="hoho"><?= $row['address'] ?></span> </h2>
                <h2>Usertype : <span id="hoho"><?= $row['usertype'] ?></span> </h2>
                <br><br>
                <center><button><a href="../view/updateprofile.php?edit=<?php echo $row['id']; ?>">Update</a></button></center>
            </div>

        </div>
    </body>

    </html>

<?php
}
?>