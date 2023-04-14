<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "futsal";
$conn = mysqli_connect($hostname, $username, $password, $database);

$adduser = "insert into users(username, user_email, user_password, user_contact) values ('".$_POST['fullname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['contact']."')";
$result = mysqli_query($conn, $adduser);

if ($result){
    echo "User added successfully <a href='login.php'><button>Continue to login</button></a>";
}
