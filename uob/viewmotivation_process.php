<?php


function view_motivations(){
  require('connection.php');
  
     $sql = "SELECT * FROM motivation";
     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0){
     while ($row=mysqli_fetch_array($result)) {
       $sn =  $row['sn'];
       $name = $row['fullname'];
       $email =  $row['email'];
       $username =  $row['id'];
       $motivation =  $row['motivation'];
       $date =  $row['date'];
      
       echo "<tr>
      <td>$sn</td>
      <td>$name</td>
      <td>$email</td>  
      <td>$username</td> 
      <td>$motivation</td>  
      <td>$date</td>  
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('staffpanel.php', '_self')</script>";
    }
  }

?>