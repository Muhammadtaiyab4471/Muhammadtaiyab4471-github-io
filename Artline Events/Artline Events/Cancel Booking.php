<?php 

require("connection.php");

if(isset($_POST['cancel_event'])) {
    $eventID = $_POST['EventID'];
    $bookingID = $_POST['BookingID'];

    // Perform delete operation for eevent table
    $deleteEventQuery = "DELETE FROM eevent WHERE EventiD = '$eventID'";
    
    // Perform delete operation for booking table
    $deleteBookingQuery = "DELETE FROM booking WHERE BookingID = '$bookingID'";
    
    if(mysqli_query($conn, $deleteEventQuery) && mysqli_query($conn, $deleteBookingQuery)) {
        echo "<script>alert('Event canceled successfully')</script>";
        // Refresh the page to reflect the changes
        echo "<script>window.location.reload()</script>";
    } else {
        echo "<script>alert('Error: Unable to cancel event')</script>";
    }
}
?>
