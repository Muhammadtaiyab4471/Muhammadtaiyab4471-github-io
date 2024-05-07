<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
</head>
<body>

<center>
    
    <h2>Artline Events</h2>
    <img src="Logo.png" alt="Logo" width="200" height="100">
    <h1>Customer Registration</h1>

</center>

    <form class="form-group" action="Customer Registration process.php" method="post">
        <center>

        <label>Full Name</label>
        <input type="text" name="FullName" class="form-control" placeholder="Enter your Full Name" required="">
        <br>

        <label>Email</label>
		<input type="text" name="Email" class="form-control" placeholder="Enter your Email" required="">
        <br>

        <label>Phone Number</label>
		<input type="text" name="PhoneNumber" class="form-control" placeholder="Enter your Phone Number" required="">
        <br>

        <label>Gender</label>
		<input type="text" name="Gender" class="form-control" placeholder="Enter your Gender" required="">
        <br>

		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="Enter your Username" required="">
        <br>

		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Enter your password" required="">
        <br>

        <label>Confirm Password</label>
		<input type="password" name="cpassword" class="form-control" placeholder="Enter your password Again" required="">
        <BR>

		<input type="submit" name="RegistrationSubmit"  class="btn btn-primary" value="Register">	
		</center>
		
	</form>

</body>
</html>