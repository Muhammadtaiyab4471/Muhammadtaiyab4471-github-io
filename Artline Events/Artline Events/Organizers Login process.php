<?php 
 session_start();

require('connection.php');

if(isset($_POST['LoginSubmitOrganizers'])){
    $username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM organizers WHERE OrganizersUsername = '$username' AND OrganizersPassword = '$password' ";
	$result = mysqli_query($conn,$sql);
	$final = mysqli_num_rows($result);

	if($final > 0){

		while ($row=mysqli_fetch_array($result)) {
            
		 $_SESSION['OrganizersID'] = $row['OrganizersID'];
		 $_SESSION['OrganizersName'] = $row['OrganizersName'];
		 $_SESSION['OrganizersEmail'] = $row['OrganizersEmail'];
		 $_SESSION['OrganizersPhone'] = $row['OrganizersPhone'];
		 

        header("Location: Organizers Panel.php");
     }
 }else{ 
		echo "<script>alert('Please enter your correct details')</script>";
		echo "<script>window.open('Organizers Login.php','_self')</script>";		
	}
}
?>