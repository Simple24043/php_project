<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "futsal";
$conn = mysqli_connect($hostname, $username, $password, $database);

$clearPending = "delete from pending where id=".$_GET['id'];

mysqli_query($conn, $clearPending);

header("Location: admin.php");