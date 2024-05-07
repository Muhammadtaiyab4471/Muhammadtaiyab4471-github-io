<?php 

require('connection.php');

if(isset($_POST['AddEvent'])){
    
    $EventName = $_POST['EventName'];
	$EventTitle = $_POST['EventTitle'];
    $EventDate = $_POST['EventDate'];
    $EventDescription = $_POST['EventDescription'];
    $CustomerID = $_POST['CustomerID'];
    $VenueID= $_POST['VenueID'];
    
	
$sql = "INSERT INTO eevent (Eventname, Eventtitle, Eventdate, Eventdescription, EventiD, CustomeriD, VenueID) VALUES('$EventName', '$EventTitle', '$EventDate', '$EventDescription', NULL, '$CustomerID', '$VenueID')";
$result = mysqli_query($conn, $sql);

if ($result) {
	echo "<script>alert('New event added Succesfully')</script>";
	echo "<script>window.open('Customer Panel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";

}
}

?>