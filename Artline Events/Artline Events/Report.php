<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="table style.css">
</head>

<body>

<center>
    <h2>Reports</h2>
</center>
    
<h2>Bookings with Price Less than 500 AED</h2>
<<?php

require("connection.php");

$sql = "SELECT * FROM booking WHERE Price < 500";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo "<h2>Bookings with Price Less than 500 AED</h2>";
    echo "<table border='1'>
            <tr>
                <th>Booking ID</th>
                <th>Event ID</th>
                <th>Customer ID</th>
                <th>Price (AED)</th>
                <th>Booking Date</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['BookingID']}</td>
                <td>{$row['EventID']}</td>
                <td>{$row['CustomerID']}</td>
                <td>{$row['Price']}</td>
                <td>{$row['Bookingdate']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No bookings found with price less than 500 AED.</p>";
}

?>

<?php

require("connection.php");

$sql = "SELECT MONTH(Bookingdate) AS Month, COUNT(*) AS NumEvents
        FROM booking
        GROUP BY MONTH(Bookingdate)
        ORDER BY MONTH(Bookingdate)";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo "<h2>Month-wise Report of Number of Events Booked</h2>";
    echo "<table border='1'>
            <tr>
                <th>Month</th>
                <th>Number of Events Booked</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $month = date("F", mktime(0, 0, 0, $row['Month'], 1));
        echo "<tr>
                <td>{$month}</td>
                <td>{$row['NumEvents']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No events booked yet.</p>";
}

?>


</body>

</html>