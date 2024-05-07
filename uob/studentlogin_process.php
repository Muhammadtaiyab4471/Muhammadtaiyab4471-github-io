<?php 
 session_start();

require('connection.php');

if(isset($_POST['loginsubmit'])){
    $username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM student WHERE username = '$username' AND password = '$password' ";
	$result = mysqli_query($conn,$sql);
	$final = mysqli_num_rows($result);

	if($final > 0){
		while ($row=mysqli_fetch_array($result)) {
     	 $_SESSION['name'] =  $row['fullname'];
     	 $_SESSION['username'] =  $row['username'];
     	 $_SESSION['email'] =  $row['email'];
        header("Location:studentpanel.php");
     }
 }else{ 
		echo "<script>alert('Please enter your correct details')</script>";
		echo "<script>window.open('studentlogin.php','_self')</script>";		
	}
}
?>

