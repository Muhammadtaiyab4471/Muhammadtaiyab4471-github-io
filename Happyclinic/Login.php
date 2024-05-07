<head>
    <link rel="stylesheet" href="Happyclinic.css">
    
    <title>Login</title>
</head>

<body>

    <div class="Page">
        <h2>Happy Clinic</h2>
    </div>
    
        <img src="Happy clinic logo.PNG" alt="Happy clinic logo" class="center" height="150" width="150">
         
    
    <div class="home">
        <span class="spacing">
        <button><a href="Home.php"> Home</a></button>
        <button><a href="Contact.php">Contact us</a></button>
        <button><a href="Appointment.php">Book an Appointment</a></button>
        <button><a href="Login.php">Login</a></button>
        </span>
    </div>

    <form action= "Insert3.php" method="Post">

            <p>
                <label for= "Username"> Username:</label>
                <input type= "text" name= "Username" id= "Username">
            </p>
    
            <p>
                <label for= "Password"> Password: </label>
                <input type= "Text" name= "Password" id= "Password">
            </p>

            <input type= "submit" value= "Submit">
    </form>
</body>