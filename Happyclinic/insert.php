<?php

// servername => localhost
// username => root
// password => empty
// database name => dental
$conn = mysqli_connect ("localhost", "root", "","dental");

// Check connection
if($conn === false) {
  die ("ERROR: Could not connect. "
    . mysqli_connect_error());
}

// Taking all 5 values from the form data (input)
$Name= $_REQUEST [ 'Name'];
$Number = $_REQUEST ['Number'];
$gender = $_REQUEST ['gender'];
$address = $_REQUEST ['address'];
$email = $_REQUEST ['email'];
$date = $_REQUEST ['date'];
// Performing insert query execution
// here our table name is customer 
$sql = "INSERT INTO customer VALUES ('$Name',
 '$Number','$gender', '$address', '$email', '$date')";
 if (mysqli_query($conn,$sql)){
    echo "<h3>date stored in a database succesfully.
    </h3>";

    echo nl2br ("/n$Name/n $Number/n "
    . "$gender/n $address/n $email/n $date");
 } else {
    echo "ERROR: Hush! Sorry $sql."
    . mysqli_error($conn);
 }


 //close connection
 mysqli_close ($conn);
 ?>