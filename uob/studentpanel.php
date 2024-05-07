
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:url('images/Signup bg.jpg'); no-repeat background-size:cover; opacity ">
	<!<div class ="jumbotron" id="cs1"> </div>

	<div class="col-md-3">
	<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand logo_h" href="index.php"><img src="../images/Logo.jpg" alt="" align="left"></a>                      		
					
					</div>

</div>
		<div class="container-fluid">
                   <?php
                    //session_start();
                    require('studentlogin_process.php'); 
                       $var1 ='';
                       $var1 = $_SESSION['name'] ;
                       $var2 = $_SESSION['username'] ;
                    ?>

          <marquee> <h1>WELLCOME <?php echo $var1?> </h1></marquee>

<div class="row">
				<div class="col-md-3">`
				<div class="list-group">
					<class="list-group-item active" style="background-color: blue; color: white; border-color: #06F2F8;"><h3 align="center">Preferences</h3>
					
                 
					<a href="viewevent.php" class="list-group-item">View Events</a>
				 
				 <a href="view Complaints.php" class="list-group-item">Complaints</a>
                     </div>
					
					
                    
                  
					

				
			</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="background-color: blue; color: white; text-align: center;";>
				
				<h5>Student Motivation Level </h5></div>
				<div class="card-body">
					<form class="form-group" action="motivation_process.php" method="POST" enctype="multipart/form-data">	
					
					 <!--
                     
                     <label>Fullname</label>
						<input type="text" name="fullname"  class="form-control" required placeholder="Enter your fullname"><br>

					<label>Email</label>
						<input type="text" name="email"  class="form-control" required ><br>	


					<label>ID</label>
						<input type="text" name="id"  class="form-control" required><br>	

-->
					<label>Motivation Level</label>
						<select class="form-control" name="motivation">
							<option>What's your current motivation level ?...</option>
							<option>Highly Motivated</option>
							<option>Partially Motivated</option>
							<option>Not Motivated</option>
						
						</select><br>		

						<center> <input type="submit" name="submit" value="Submit" class="btn btn-danger"></center>

					</form>
				</div>
			</div><p><br><p><p>

		</div>
<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: blue; color: white; border-color: #06F2F8;"><h3 align="center">My Profile</h3>
					
					<a href="index.php" class="list-group-item">Log out</a>
					
					
                    
                     </div>
					
					
			</div>
			
		
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$(function(){
    $('#time').combodate({
        firstItem: 'name', //show 'hour' and 'minute' string at first item of dropdown
        minuteStep: 1
    });  
});
</script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
				  Swal.fire({
				  title: 'Welcome Admin',
				  text: 'Enjoy your operations',
				  imageUrl: 'images/logo.jpg',
				  imageWidth: 200,
				  imageHeight: 100,
				  imageAlt: 'Custom image',
				  animation: false
				})
	});

</script> > -->
</body>
</html>
