<?php

require("connection.php");

if(isset($_POST['specific_date'])) {
    $specific_date = $_POST['specific_date'];

    $sql = "SELECT * FROM booking WHERE DATE(Bookingdate) = '$specific_date'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Display booking details in a table
        echo "<h3>Booking Details for $specific_date</h3>";
        echo "<table border='1'>
                <tr>
                    <th>Booking ID</th>
                    <th>Event ID</th>
                    <th>Customer ID</th>
                    <th>Organizer ID</th>
                    <th>Venue ID</th>
                    <th>Price</th>
                    <th>Payment</th>
                    <th>Booking Date</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['BookingID']}</td>
                    <td>{$row['EventID']}</td>
                    <td>{$row['CustomerID']}</td>
                    <td>{$row['OrganizerID']}</td>
                    <td>{$row['VenueID']}</td>
                    <td>{$row['Price']}</td>
                    <td>{$row['Payment']}</td>
                    <td>{$row['Bookingdate']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No bookings found for $specific_date</p>";
    }
} else {
    echo "<p>Please select a specific date.</p>";
}

?>