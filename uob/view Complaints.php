<?php 

require('connection.php');
require('studentlogin_process.php');


    global $conn;
       $sql = "SELECT * FROM comp";
       $result = mysqli_query($conn, $sql);


       while ($row=mysqli_fetch_array($result)) {
         $fullname =  $row['fullname'];
         $email = $row['email'];
         $Complaints = $row['Complaints'];
         $date = $row['date'];

       }

$var1 = $_SESSION['email'] ;
$var2 = $_SESSION['username'] ;

?>


<?php

$email = $var1;

$sql = "SELECT date, Complaints FROM comp WHERE email = '$email'";
$result = $conn->query($sql);

$complaints = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $complaints[] = array(
            'date' => $row['date'],
            'Complaints' => $row['Complaints']
        );
    }
}

?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background:url('images/Signup bg.jpg'); no-repeat background-size:cover; opacity: 2 ; ">


<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/uob.png" alt=""></a>

</div>
<div class="container" style="width: 1500px; margin-top:100px";>
	<div class="card">
       
    	<div class="card-body" style="background-color: #3498DB ; color: white; border-color: #06F2F8;">
         <div class="row">
         <div class="col-md-3">
         <a href="Studentpanel.php" class="btn btn-light">Click to go back</a></div>
        
		<div class="col-md-4">
		<center><h4> Complaints</h4> </div>
		 <div class="col-md-5">
		 	
		 	
		 	
		 </div>
		 </div>
	</div>
		<div class="card-body">
			<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Date</th>
      <th scope="col">Complaint</th>

    </tr>
  </thead>
  <tbody>

  <?php foreach ($complaints as $complaint) { ?>
                    <tr>
                        <td><?php echo $complaint['date']; ?></td>
                        <td><?php echo $complaint['Complaints']; ?></td>
                    </tr>
                <?php } ?>
  </tbody>
</table>
			
		</div>
	</div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>