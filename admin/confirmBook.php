<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "futsal";
$conn = mysqli_connect($hostname, $username, $password, $database);

$updateValue = "update ".$_GET['branch']." set ".$_GET['day']."= true where Timeperiod='".$_GET['time']."'";
$clearPending = "delete from pending where id=".$_GET['id'];
$addToExpecting = "insert into visiting(name, day, Timeperiod, email, contact, branch) values ('".$_GET['name']."', '".$_GET['day']."', '".$_GET['time']."', '".$_GET['email']."', '".$_GET['contact']."', '".$_GET['branch']."')";

mysqli_query($conn, $updateValue);
mysqli_query($conn, $clearPending);
mysqli_query($conn, $addToExpecting);




header('Location: admin.php');