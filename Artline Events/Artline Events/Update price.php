<?php

require("connection.php");

if(isset($_POST['booking_id']) && isset($_POST['new_price'])) {
    $booking_id = $_POST['booking_id'];
    $new_price = $_POST['new_price'];

    $sql = "UPDATE booking SET Price = '$new_price' WHERE BookingID = '$booking_id'";

    if(mysqli_query($conn, $sql)) {
        echo "<p>Price updated successfully for Booking ID: $booking_id</p>";
    } else {
        echo "<p>Error updating price: " . mysqli_error($conn) . "</p>";
    }
} else {
    echo "<p>Please enter both Booking ID and New Price.</p>";
}

?>
