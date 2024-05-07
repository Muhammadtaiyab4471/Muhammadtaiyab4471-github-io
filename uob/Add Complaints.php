<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background:url('images/Signup bg.jpg'); no-repeat background-size:cover; opacity: 2 ; ">

<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/uob.png" alt=""></a>

</div>

<div class="container" style="width: 800px; margin-top:100px";>
	<div class="card">
       
    	<div class="card-body" style="background-color: #3498DB ; color: white; border-color: #06F2F8;">
         <div class="row">
         <div class="col-md-3">
         <a href="staffpanel.php" class="btn btn-light">Click to go back</a></div>
</div>
<br>

<center>
		<div class="col-md-4">
		<h4>Complaints</h4>
        </div>

		 <div class="col-md-5">
		 	
		 	<form  method="post" action="Add Complaints_process.php" class="form-group">

             <label>Full Name</label>
		<input type="text" name="fullname" class="form-control" placeholder="Enter students Full Name" required=""><br>

             <label>Email</label>
		<input type="text" name="email" class="form-control" placeholder="Enter students Email" required=""><br>

		<label>Complaint</label>
		<input type="text" name="Complaints" class="form-control" placeholder="Minumum 255 words" required=""><br>

		<center>
		<input type="submit" name="submit"  class="btn btn-primary" value="Add Complaint">	
		</center>
		
		 	</form>
</center>            
		 	
		 </div>


		 </div>


         
	</div>

	</div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>