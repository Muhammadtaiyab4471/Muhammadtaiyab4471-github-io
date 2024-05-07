<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View details</title>
</head>

<body>

<center>
    <h2>View Details</h2>
</center>

    <h3>View Booking details</h3>
    <form method="post" action="view booking.php">
        <label for="booking_id">Enter Booking ID:</label>
        <input type="text" id="booking_id" name="booking_id" required>

        <input type="submit" value="Search">
    </form>

    <h3>View Event details</h3>
    <form method="post" action="view events.php">
        <label for="event_id">Enter Event ID:</label>
        <input type="text" id="event_id" name="event_id" required>

        <input type="submit" value="Search">
    </form>


    <h3>View Customer details</h3>
    <form method="post" action="View customer.php">
        <label for="customer_id">Enter Customer ID:</label>
        <input type="text" id="customer_id" name="customer_id" required>

        <input type="submit" value="Search">
    </form>

    <h3>View Venue details</h3>

    <form method="post" action="view venue.php">
        <label for="venue_id">Enter Venue ID:</label>
        <input type="text" id="venue_id" name="venue_id" required>

        <input type="submit" value="Search">
    </form>


</body>

</html>