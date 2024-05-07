<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Customer Panel</title>
   <link rel="stylesheet" href="table style.css">
   <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
                    //session_start();
                    require('Customer Login process.php'); 
                       $var1 ='';
                       $var1 = $_SESSION['name'] ;
                       $var3 = $_SESSION['ID'] ;
                    ?>

   
<marquee> <h1>WELLCOME <?php echo $var1?> </h1></marquee>
<h1>Customer ID: <?php echo $var3?> </h1>

<center>

<h3>Add Events</h3>
<form class="form-group" action="Add Event process.php" method="post">


   <label>Event Name</label>
   <input type="text" name="EventName" class="form-control" placeholder="Enter the name of event" required="">
   <br>

   <label>Event Title</label>
   <input type="text" name="EventTitle" class="form-control" placeholder="Enter the title of event" required="">
   <br>

   <label>Event Date</label>
   <input type="date" name="EventDate" class="form-control" placeholder="Enter the date of event" required="">
   <br>

   <label>Event Description</label>
   <input type="text" name="EventDescription" class="form-control" placeholder="Enter the description of event" required="">
   <br>

   <label for="Venue">Choose a Venue:</label>
<select name="VenueID" id="Venue">
  <option value="1">Lumina Lounge</option>
  <option value="2">Serenity Gardens</option>
  <option value="3">Starlight Pavilion</option>
  <option value="4">Harmony Hall</option>
  <option value="5">Riverside Retreat</option>
</select>
<br>

   <input type="radio"  name="CustomerID" value="<?php echo $var3 ?>">
   <label for="CustomerID"> your detail will be sent to our orgnizaers </label>
   <br>

   <input type="submit" name="AddEvent"  class="btn btn-primary" value="Add Event">	

 </center>
 
</form>

<h3>booking and Payment</h3>
<?php
$sql = "SELECT * FROM booking WHERE CustomerID = '$var3'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo "<table>
            <tr>
                <th>BookingID</th>
                <th>EventID</th>
                <th>Payment</th>
            </tr>";

    while ($row = mysqli_fetch_array($result)) {
        $BookingID =  $row['BookingID'];
        $EventID = $row['EventID'];
        $Payment =  $row['Payment'];

        echo "<tr>
                <td>$BookingID</td>
                <td>$EventID</td>
                <td>$Payment</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No bookings found.";
}
?>

<center>
<h3>Make Payment</h3>

<form class="form-group" action="Update payment.php" method="post">



   <label>Booking ID</label>
   <input type="text" name="BookingID" class="form-control" placeholder="Enter the Booking ID" required="">
   <br>

   <label>Event ID</label>
   <input type="text" name="EventID" class="form-control" placeholder="Enter the Event ID" required="">
   <br>

   <label for="pay">Payment</label>
<select name="pay" id="pay">
  <option value="paid">paid</option>
</select>
<br>

   <input type="submit" name="paymentupdate"  class="btn btn-primary" value="Make Payment">	

 </center>
 
</form>

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

    <h3>View Venue details</h3>

    <form method="post" action="view venue.php">
        <label for="venue_id">Enter Venue ID:</label>
        <input type="text" id="venue_id" name="venue_id" required>

        <input type="submit" value="Search">
    </form>

</body>
</html>