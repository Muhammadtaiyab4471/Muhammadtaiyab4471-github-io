<?php 

require('connection.php');
require('studentlogin_process.php');

if(isset($_POST['submit'])){
    
    
     $motivation = $_POST['motivation'];


   
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    


    $todaysdate = date("Y-m-d H:i:s");



    
$sql = "INSERT INTO motivation (sn,  fullname, email, id, motivation, date) VALUES(NULL, '$name', '$email', '$username', '$motivation', '$todaysdate')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New Motivation Submitted Succesfully')</script>";
	echo "<script>window.open('studentpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}

}


?>