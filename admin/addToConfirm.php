<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "futsal";
$conn = mysqli_connect($hostname, $username, $password, $database);

$query = "insert into pending(name, day, Timeperiod, contact, branch, email) values ('" . $_SESSION['name'] . "', '" . $_GET['day'] . "', '" . $_GET['time'] . "', " . $_SESSION['contact'] . ", '" . $_GET['branch'] . "', '" . $_SESSION['email'] . "')";

function chabahilNotChabhail ($mistake) {
    if($mistake == 'chabhail'){
        return 'chabahil';
    }else{
        return $mistake;
    }
}

if ($conn->query($query)) {
    echo "<h1>Thankyou for Booking!</h1>";
    echo "<h3>You will receive an email at " . $_SESSION['email'] . "</h3>";
    echo "<br><a href='../branches/".chabahilNotChabhail($_GET['branch']).".php'><button>Go to home</button></a>";
}
//$query = "update ".$_GET['branch']." set ".$_GET['day']." = true where Timeperiod = '".$_GET['time']."'";
