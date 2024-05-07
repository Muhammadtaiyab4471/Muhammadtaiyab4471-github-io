<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body style="background:url('images/Signup bg.jpg'); no-repeat background-size:cover; opacity ">


<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/uob.png" alt=""></a>

					<a href="index.php" class="btn btn-warning">Back To Home</a>

</div>
<div class="container" style="width: 500px; margin-top:20px";>
	<div class="card">
       <img src="images/sp.jpg" class="card-img-top" width="100px" height="100px">
		<div class="card-body">

	<form class="form-group" action="register_process.php" method="post">
		            
					<label>Full Name</label>
						<input type="text" name="fullname" class="form-control" required>
					<label>Email</label>
						<input type="email" name="email" class="form-control" required="number">
					<label>Address</label>
						<input type="text" name="address" class="form-control" required="number">
					<label>Gender</label>
						<select class="form-control" name="gender">
							<option>Male</option>
							<option>Female</option>
						</select>
					<label>Username</label>
			             <input type="text" name="username" class="form-control" placeholder="Enter your Username" required="">
			         <label>Password</label>
			             <input type="password" name="password" class="form-control" placeholder="Enter your password" required="">
                     <label>Confirm Password</label>
			             <input type="password" name="cpassword" class="form-control" placeholder="Enter your password Again" required=""><BR>
		<center>
		<input type="submit" name="register"  class="btn btn-primary" value="Register">	
		</center>
		
	</form>
</div>
</div>
</div>
 <footer id="footer" class="midnight-blue">
        <div class="container" style="width: 500px; margin-top: 150px  ">
            <div class="row">
                <div class="col-sm-12">
                    <center> University Of Bolton &copy; <?= date('Y'); ?> .All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>