<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../View/loginss.css">
</head>

<body>

    <h2>Welcome! Please Login</h2>

    <div class="center">

        <section class="login-form">

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p> <br>
            <?php } ?>

            <form class="" action="../Controller/loginvalidation.php" method="POST">


                <label for="email">Email</label>
                <input type="text" name="email" placeholder="enter email"> <br><br>


                <?php if (isset($emailerror)) { ?><?php echo $emailerror; ?> <br> <?php  } ?>
            <?php if (isset($invalidemail)) { ?><?php echo $invalidemail; ?> <br> <?php  } ?>
        <br>

        <label for="userpassword">Password</label>
        <input type="password" name="userpassword" placeholder="enter password"> <br> <br>


        <?php if (isset($passworderror)) { ?><?php echo $passworderror; ?> <br> <?php  } ?>
    <br>
    <input id="login-button" type="submit" value="Login" name="login">

            </form>
        </section>
    </div>




</body>


</html>