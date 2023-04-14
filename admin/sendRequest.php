<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "futsal";
$conn = mysqli_connect($hostname, $username, $password, $database);
if ($_SESSION['logged']) {
    $check = "select * from " . $_GET['branch'] . " where Timeperiod='" . $_GET['time'] . "' and " . $_GET['day'] . " =true ";

    $result = mysqli_query($conn, $check);
    $row = mysqli_fetch_assoc($result);
    if ($row > 0) {
        if ($_GET['branch'] == 'kapan') {
            echo "not available <a href='../branches/kapan.php'><button>Go back</button></a>";
        } elseif ($_GET['branch'] == 'baneshwor') {
            echo "not available <a href='../branches/baneshwor.php'><button>Go back</button></a>";
        } elseif ($_GET['branch'] == 'chabhail') {
            echo "not available <a href='../branches/chabahil.php'><button>Go back</button></a>";
        }
    } else {
        echo "available <a href='addToConfirm.php?branch=" . $_GET['branch'] . "&time=" . $_GET['time'] . "&day=" . $_GET['day'] . "'><button>Confirm book</button></a>";
    }
} else {
echo 'Please login first';
}

