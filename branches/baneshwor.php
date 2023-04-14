<h1>Baneshwor</h1>
<table width="100%" style="text-align: center">
    <tr>
        <th>Sunday</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
    </tr>

    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "futsal";
    $conn = mysqli_connect($hostname, $username, $password, $database);
    $query = 'select * from baneshwor';

    $result = mysqli_query($conn, $query);


    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
        <td>" . $row['Timeperiod'] . "<a href='../admin/sendRequest.php?branch=baneshwor&day=Sun&time=" . $row['Timeperiod'] . "'> <button>Book</button></a> </td>
        <td>" . $row['Timeperiod'] . "<a href='../admin/sendRequest.php?branch=baneshwor&day=Mon&time=" . $row['Timeperiod'] . "'><button>Book</button></a>  </td>
        <td>" . $row['Timeperiod'] . "<a href='../admin/sendRequest.php?branch=baneshwor&day=Tue&time=" . $row['Timeperiod'] . "'><button>Book</button></a>  </td>
        <td>" . $row['Timeperiod'] . "<a href='../admin/sendRequest.php?branch=baneshwor&day=Wed&time=" . $row['Timeperiod'] . "'><button>Book</button></a>  </td>
        <td>" . $row['Timeperiod'] . "<a href='../admin/sendRequest.php?branch=baneshwor&day=Thu&time=" . $row['Timeperiod'] . "'><button>Book</button></a>  </td>
        <td>" . $row['Timeperiod'] . "<a href='../admin/sendRequest.php?branch=baneshwor&day=Fri&time=" . $row['Timeperiod'] . "'><button>Book</button></a>  </td>
        <td>" . $row['Timeperiod'] . "<a href='../admin/sendRequest.php?branch=baneshwor&day=Sat&time=" . $row['Timeperiod'] . "'><button>Book</button></a>  </td>
        </tr>
    ";
    }
    ?>
</table>
