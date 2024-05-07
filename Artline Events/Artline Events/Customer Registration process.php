<?php 

require('connection.php');

if(isset($_POST['RegistrationSubmit'])){
    
    $name = $_POST['FullName'];
	$email = $_POST['Email'];
    $phonenumber = $_POST['PhoneNumber'];
    $gender = $_POST['Gender'];
    $username = $_POST['username'];
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];	


    if($password == $cpassword){
	
$sql = "INSERT INTO customer (FullName, Email, Phone, Gender, Username, password, ID) VALUES('$name', '$email', '$phonenumber', '$gender', '$username', '$password', NULL)";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New User Registed Succesfully')</script>";
	echo "<script>window.open('Customer login.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "<script>alert('Sorry Password do not match')</script>";
	echo "<script>window.open('Customer Register.php','_self')</script>";
}
}


?>