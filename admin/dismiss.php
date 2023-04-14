<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "futsal";
$conn = mysqli_connect($hostname, $username, $password, $database);

$updateValue = "update ".$_GET['branch']." set ".$_GET['day']."= false where Timeperiod='".$_GET['time']."'";
$clearPending = "delete from visiting where id=".$_GET['id'];

mysqli_query($conn, $updateValue);
mysqli_query($conn, $clearPending);

header("Location: admin.php");