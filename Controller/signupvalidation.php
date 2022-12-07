<?php
session_start();
require_once('../Model/usermodel.php');

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $usertype = $_POST['usertype'];
    $address = $_POST['address'];
    $userpassword = $_POST['userpassword'];
    $confirmpassword = $_POST['confirmpassword'];
}
?>

<script>
    if ((usernameerror ||
            emailerror ||
            phoneerror ||
            doberror ||
            usertypeerror ||
            addresserror ||
            userpassworderror ||
            confirmpassworderror) == false) {
</script>
<?php


$conn = getConnection();
$userinfo = [

    'username'     =>     $username,
    'email'          =>     $email,
    'phone'     =>     $phone,
    'dob'               =>     $dob,
    'usertype'          =>     $usertype,
    'address'     =>     $address,
    'userpassword'     =>     $userpassword,
    'confirmpassword'     =>     $confirmpassword
];

$status = insertUser($userinfo);
if ($status) {
    header('location: ../View/login.php');
} else {
    echo "failed to insert!";
}

?>

<script>
    }
</script>