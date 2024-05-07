<?php

require("connection.php");

if(isset($_POST['venue_id'])) {
    $venue_id = $_POST['venue_id'];

    $sql = "SELECT * FROM venue WHERE VenueID = '$venue_id'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Display venue details
        $row = mysqli_fetch_assoc($result);
        echo "<h3>Venue Details for Venue ID: $venue_id</h3>";
        echo "<p><strong>Venue Name:</strong> {$row['VenueName']}</p>";
        echo "<p><strong>Venue Capacity:</strong> {$row['VenueCapacity']}</p>";
        echo "<p><strong>Venue Location:</strong> {$row['VenueLocation']}</p>";
    } else {
        echo "<p>No venue found for Venue ID: $venue_id</p>";
    }
} else {
    echo "<p>Please enter a Venue ID.</p>";
}

?>
