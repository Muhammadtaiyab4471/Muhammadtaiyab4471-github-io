<?php

require("connection.php");

if(isset($_POST['event_id'])) {
    $event_id = $_POST['event_id'];

    $sql = "SELECT * FROM eevent WHERE EventID = '$event_id'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Display event details
        $row = mysqli_fetch_assoc($result);
        echo "<h3>Event Details for Event ID: $event_id</h3>";
        echo "<p><strong>Event Name:</strong> {$row['Eventname']}</p>";
        echo "<p><strong>Event Title:</strong> {$row['Eventtitle']}</p>";
        echo "<p><strong>Event Date:</strong> {$row['Eventdate']}</p>";
        echo "<p><strong>Event Description:</strong> {$row['Eventdescription']}</p>";
        echo "<p><strong>Customer ID:</strong> {$row['CustomeriD']}</p>";
        echo "<p><strong>Venue ID:</strong> {$row['VenueID']}</p>";
    } else {
        echo "<p>No event found for Event ID: $event_id</p>";
    }
} else {
    echo "<p>Please enter an Event ID.</p>";
}

?>
