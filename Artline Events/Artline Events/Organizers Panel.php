<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

.home {
    margin: 10px;
    padding: 10px;
    text-align: center
  }

.spacing {
    word-spacing: 100px;
}

        </style>


    <title>Organizers Panel</title>

    <link rel="stylesheet" href="table style.css">

</head>

<body>

<?php
                    //session_start();
                    require('Organizers Login process.php'); 
                       $var1 ='';
                       $var1 = $_SESSION['OrganizersName'] ;
                       $var2 = $_SESSION['OrganizersID'] ;
                    ?>

<marquee> <h1>WELLCOME <?php echo $var1?> </h1></marquee>
<h1>Organizer ID: <?php echo $var2 ?></h1>

<div class="home">
        <span class="spacing">
        <button><a href="Organizers Panel.php">Home</a></button>
        <button><a href="Details page.php">Details</a></button>
        <button><a href="Report.php">Report</a></button>
        </span>
    </div>
    
<center>
<h3>Events</h3>

<?php 
                require('connection.php');
  
                $sql = "SELECT * FROM eevent";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                while ($row=mysqli_fetch_array($result)) {

                  $Eventname =  $row['Eventname'];
                  $Eventtitle = $row['Eventtitle'];
                  $Eventdate =  $row['Eventdate'];
                  $Eventdescription =  $row['Eventdescription'];
                  $EventiD =  $row['EventiD'];
                  $CustomeriD =  $row['CustomeriD'];
                  $VenueID =  $row['VenueID'];


                  print("<table>

                  <tr>
                    <th>Event Name</th>
                    <th>Event Title</th>
                    <th>Event Date</th>
                    <th>Event Description</th>
                    <th>Event ID</th>
                    <th>Customer ID</th>
                    <th>Venue ID</th>
                  </tr>
                  
                  <tr>
                    <td>$Eventname</td>
                    <td>$Eventtitle</td>
                    <td>$Eventdate</td>
                    <td>$Eventdescription</td>
                    <td>$EventiD</td>
                    <td>$CustomeriD</td>
                    <td>$VenueID</td>
                  </tr>
                  
                  </table>");


                }

           }else {
                 echo "<script>('The record cant be found')</script>";
               }

                ?>
</center>



<h3>Booking</h3>

<form class="form-group" action="Add booking process.php" method="post">

        
        <label>Event ID</label>
        <input type="text" name="EventID" class="form-control" placeholder="Enter the Event ID" required="">
        <br>

        <label>Customer ID</label>
        <input type="text" name="CustomerID" class="form-control" placeholder="Enter the Customer ID" required="">
        <br>

        <label>Venue ID</label>
        <input type="text" name="VenueID" class="form-control" placeholder="Enter the Venue ID" required="">
        <br>

        <label>Organizer ID</label>
        <input type="text" name="OrganizerID" class="form-control" placeholder="Enter the Organizer ID" required="">
        <br>

        <label>Price</label>
        <input type="text" name="Price" class="form-control" placeholder="Enter the Price" required="">
        <br>

        <label>Booking date</label>
        <input type="date" name="Bookingdate" class="form-control" placeholder="Enter the Booking date" required="">
        <br>

        <label for="Paymentstatus">Payment status</label>
<select name="Paymentstatus" id="Paymentstatus">
  <option value="Not Paid">Not Paid</option>
</select>
<br>

		<input type="submit" name="MakeBookingSubmit"  class="btn btn-primary" value="Make Booking">	


		
</form>

<center>

<h3>booking payment status</h3>

<?php 
                require('connection.php');
  
                $sql = "SELECT * FROM booking";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                while ($row=mysqli_fetch_array($result)) {

                  $BookingID  =  $row['BookingID'];
                  $EventID = $row['EventID'];
                  $CustomerID =  $row['CustomerID'];
                  $OrganizerID =  $row['OrganizerID'];
                  $VenueID =  $row['VenueID'];
                  $Price =  $row['Price'];
                  $Payment=  $row['Payment'];
                  $Bookingdate = $row['Bookingdate'];
 

                  print("<table>

                  <tr>
                    <th>BookingID</th>
                    <th>EventID</th>
                    <th>CustomerID</th>
                    <th>OrganizerID</th>
                    <th>VenueID</th>
                    <th>Price</th>
                    <th>Payment status</th>
                    <th>Bookingdate</th>
                  </tr>
                  
                  <tr>
                    <td>$BookingID</td>
                    <td>$EventID</td>
                    <td>$CustomerID</td>
                    <td>$OrganizerID</td>
                    <td>$VenueID</td>
                    <td>$Price</td>
                    <td>$Payment</td>
                    <td>$Bookingdate</td>
                  </tr>
                  
                  </table>");


                }

           }else {
                 echo "<script>('The record cant be found')</script>"; }

                ?>
</center>

<center>
<h3>Update Price for Booking</h3>

<form method="post" action="Update price.php"> 
    <label for="booking_id">Booking ID:</label>
    <input type="text" id="booking_id" name="booking_id" required>

    <label for="new_price">New Price:</label>
    <input type="text" id="new_price" name="new_price" required>

    <input type="submit" value="Update Price">
</form>
</center>

<center>

<h3>Cancel booking</h3>

<form class="form-group" action="Cancel Booking.php" method="post">

        <label>Booking ID</label>
        <input type="text" name="BookingID" class="form-control" placeholder="Enter the Booking ID" required="">
        <br>

        <label>Event ID</label>
        <input type="text" name="EventID" class="form-control" placeholder="Enter the Event ID" required="">
        <br>

		<input type="submit" name="cancel_event"  class="btn btn-primary" value="cancel Booking">	

		
		
</form>

</center>

<h3>Check Booking Details on Specific Date</h3>
<form method="post" action="speficDate.php"> 
        <label for="specific_date">Select Date:</label>
        <input type="date" id="specific_date" name="specific_date" required>

        <input type="submit" value="Search">
    </form>


<h3>Count the number of Booking in the Date Range</h3>
<form method="post" action="booking on date range.php">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>

        <input type="submit" value="Search">
    </form>

</body>
</html>