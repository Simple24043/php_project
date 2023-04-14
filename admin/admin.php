<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "futsal";
$conn = mysqli_connect($hostname, $username, $password, $database);
$queryPending = "select * from pending";
$queryVisiting = "select * from visiting";

$resultPending = mysqli_query($conn, $queryPending);
$resultVisiting = mysqli_query($conn, $queryVisiting);
?>

<h1>Owner</h1>

<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;">
        <h2>Requests</h2>
        <table width="100%">
            <tr>
                <th>Branch</th>
                <th>Name of client</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Day</th>
                <th>Time</th>
                <th></th>
                <th></th>
            </tr>
            <?php

            while ($rowPending = mysqli_fetch_assoc($resultPending)) {
                echo "
                    <tr>
                        <td>" . $rowPending['branch'] . "</td>
                        <td>" . $rowPending['name'] . "</td>
                        <td>" . $rowPending['contact'] . "</td>
                        <td>" . $rowPending['email'] . "</td>
                        <td>" . $rowPending['day'] . "</td>
                        <td>" . $rowPending['Timeperiod'] . "</td>
                        <td><a href='confirmBook.php?name=" . $rowPending['name'] . "&contact=" . $rowPending['contact'] . "&day=" . $rowPending['day'] . "&time=" . $rowPending['Timeperiod'] . "&id=" . $rowPending['id'] . "&branch=" . $rowPending['branch'] . "&email=" . $rowPending['email'] . "'><button>Confirm</button></a></td>
                        <td><a href='discardRequest.php?name=" . $rowPending['name'] . "&contact=" . $rowPending['contact'] . "&day=" . $rowPending['day'] . "&time=" . $rowPending['Timeperiod'] . "&id=" . $rowPending['id'] . "&branch=" . $rowPending['branch'] . "&email=" . $rowPending['email'] . "'><button>Deny</button></a></td>
                    </tr>
                    ";
            }
            ?>
        </table>
    </div>



    <div style="margin-left: 620px;">
        <table style="width: 90%">
            <tr>
                <th>Branch</th>
                <th>Day</th>
                <th>Time</th>
                <th>Name</th>
                <th>Mail</th>
                <th>Contact</th>
                <th></th>
            </tr>
        <?php
            while($rowVisiting = mysqli_fetch_assoc($resultVisiting)){
                echo "
                    <tr>
                        <td>".$rowVisiting['branch']."</td>
                        <td>".$rowVisiting['day']."</td>
                        <td>".$rowVisiting['Timeperiod']."</td>
                        <td>".$rowVisiting['name']."</td>
                        <td>".$rowVisiting['email']."</td>
                        <td>".$rowVisiting['contact']."</td>
                        <td><a href='dismiss.php?name=" . $rowVisiting['name'] . "&contact=" . $rowVisiting['contact'] . "&day=" . $rowVisiting['day'] . "&time=" . $rowVisiting['Timeperiod'] . "&id=" . $rowVisiting['id'] . "&branch=" . $rowVisiting['branch'] . "&email=" . $rowVisiting['email'] . "'><buttton>Mark as Done</buttton></a></td>
                    </tr>
                ";
            }
        ?>
        </table>
    </div>
</div>

