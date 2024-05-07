<?php

//session_start();
require_once('connection.php');
function view_event(){
  global $conn;
     $sql = "SELECT * FROM event";
     $result = mysqli_query($conn, $sql);
     while ($row=mysqli_fetch_array($result)) {
       $name =  $row['name'];
       $presenter = $row['presenter'];
       $venue = $row['venue'];
       $date = $row['date'];
       $department = $row['department'];
       $time = $row['time']; 
       echo "<tr>
      
      <td>$name</td>
      <td>$department</td>
      <td>$presenter</td>
      <td>$venue</td>  
      <td>$date</td>
      <td>$time</td>  
    </tr>";
     }
}

?>