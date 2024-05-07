<?php 
 session_start();

require('connection.php');

if(isset($_POST['LoginSubmit'])){
    $username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password' ";
	$result = mysqli_query($conn,$sql);
	$final = mysqli_num_rows($result);

	if($final > 0){

		while ($row=mysqli_fetch_array($result)) {
     	 $_SESSION['name'] =  $row['FullName'];
     	 $_SESSION['username'] =  $row['username'];
     	 $_SESSION['email'] =  $row['Email'];
         $_SESSION['phone'] = $row['phone'];
		 $_SESSION['ID'] = $row['ID'];
        header("Location: Customer Panel.php");
     }
 }else{ 
		echo "<script>alert('Please enter your correct details')</script>";
		echo "<script>window.open('Customer Login.php','_self')</script>";		
	}
}
?>