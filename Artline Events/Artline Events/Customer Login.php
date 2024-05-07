<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
</head>
<body>

<center>
    
    <h2>Artline Events</h2>
    <img src="Logo.png" alt="Logo" width="200" height="100">
    <h1>Customer Login</h1>

</center>

    <form class="form-group" action="Customer Login process.php" method="post">
        <center>
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="Enter your Username" required="">
        <br>
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Enter your password" required="">
        <br>
		<input type="submit" name="LoginSubmit"  class="btn btn-primary" value="Login">	
		</center>
		
	</form>

</body>
</html>