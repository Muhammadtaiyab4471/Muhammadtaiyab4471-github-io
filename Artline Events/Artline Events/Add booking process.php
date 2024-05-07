<?php 

require('connection.php');

if(isset($_POST['MakeBookingSubmit'])){
    
    $EventID = $_POST['EventID'];
	$CustomerID = $_POST['CustomerID'];
    $VenueID = $_POST['VenueID'];
    $OrganizerID = $_POST['OrganizerID'];
    $Price = $_POST['Price'];
    $Paymentstatus = $_POST['Paymentstatus'];
    $Bookingdate = $_POST['Bookingdate'];


	
$sql = "INSERT INTO booking (BookingID, EventID, CustomerID, OrganizerID, VenueID, Price, Payment, Bookingdate) VALUES(NULL, '$EventID', '$CustomerID', '$VenueID', '$OrganizerID', '$Price', '$Paymentstatus', '$Bookingdate')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New booking added Succesfully')</script>";
	echo "<script>window.open('Organizers panel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}


?>