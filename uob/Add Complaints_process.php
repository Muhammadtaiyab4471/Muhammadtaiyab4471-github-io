<?php 

require('connection.php');

if(isset($_POST['submit'])) {
    
    $fullname = $_POST['fullname'];
	$email = $_POST['email'];
    $Complaints = $_POST['Complaints'];
	$todaysdate = date("Y-m-d H:i:s");

$sql = "INSERT INTO comp (fullname, email, Complaints, date) VALUES('$fullname', '$email', '$Complaints', '$todaysdate')";

$result = mysqli_query($conn, $sql);


if ($result) {
	echo "<script>alert('Complaint added Succesfully')</script>";
	echo "<script>window.open('Add Complaints.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}


}

?>