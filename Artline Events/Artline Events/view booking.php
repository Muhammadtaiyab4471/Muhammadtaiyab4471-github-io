<?php

require("connection.php");

if(isset($_POST['booking_id'])) {
    $booking_id = $_POST['booking_id'];

    $sql = "SELECT * FROM booking WHERE BookingID = '$booking_id'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Display booking details
        $row = mysqli_fetch_assoc($result);
        echo "<h3>Booking Details for Booking ID: $booking_id</h3>";
        echo "<p><strong>Event ID:</strong> {$row['EventID']}</p>";
        echo "<p><strong>Customer ID:</strong> {$row['CustomerID']}</p>";
        echo "<p><strong>Organizer ID:</strong> {$row['OrganizerID']}</p>";
        echo "<p><strong>Venue ID:</strong> {$row['VenueID']}</p>";
        echo "<p><strong>Price:</strong> {$row['Price']}</p>";
        echo "<p><strong>Payment:</strong> {$row['Payment']}</p>";
        echo "<p><strong>Booking Date:</strong> {$row['Bookingdate']}</p>";
    } else {
        echo "<p>No booking found for Booking ID: $booking_id</p>";
    }
} else {
    echo "<p>Please enter a Booking ID.</p>";
}

?>
