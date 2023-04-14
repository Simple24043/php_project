<?php
session_start();
$_SESSION['logged'] = null;
$_SESSION['id'] = null;
$_SESSION['name'] = null;
$_SESSION['contact'] = null;
$hostname = "localhost";
$username = "root";
$password = "";
$database = "futsal";
$conn = mysqli_connect($hostname, $username, $password, $database);
$checkLogin = "SELECT * from users where user_email='" . $_POST['email'] . "' and user_password='" . $_POST['password'] . "'";

$result = mysqli_query($conn, $checkLogin);
if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    if ($data['user_email'] == $_POST['email'] && $data['user_password'] == $_POST['password']) {
        $_SESSION['logged'] = true;
        $_SESSION['id'] = $data['userid'];
        $_SESSION['name'] = $data['username'];
        $_SESSION['contact'] = $data['user_contact'];
        $_SESSION['email'] = $data['user_email'];
        header("Location: ../frontpage.php");
    } else {
        header("Location: login.php");
        echo "<script>alert('Invalid Login')</script>";
    }
} else {
    header("Location: login.php");
    echo "<script>alert('Invalid Login')</script>";
}