<?php 

$server = "localhost";
$username = "root";
$password = "";
$db = "artline"; // connecting to DB

$conn = mysqli_connect($server, $username, $password, $db);


if(!$conn){
	die("connection failed: " .mysqli_connect_error());
}else{ 
	echo "Connection is Successful";
}


?>
