<head>
    <link rel="stylesheet" href="Happyclinic.css">

    <title>Appointment</title>
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
    
    <div class="Appoinment">
        <form action= "insert.php" method= "post">

            <p>
                <label for= "PatientName"> Patient Name:</label>
                <input type= "text" name= "Name" id= "PatientName">
            </p>
    
            <p>
                <label for= "PatientNumber"> Patient Number: </label>
                <input type= "number" name= "Number" id= "PatientNumber">
            </p>
    
            <p>
                <label for= "gender"> Gender: </label>
                <input type= "text" name= "gender" id= "Gender">
            </p>
    
            <p>
                <label for= "address"> Address: </label>
                <input type= "text" name= "address" id= "Address">
            </p>
    
            <p>
                <label for="emailAddress"> Email Address:</label>
                <input type= "text" name= "email" id= "emailAddress">
            </p>
    
            <p>
                <label for= "AppointmentDate">Appointment date: </label>
                <input type= "date" name="date" id="AppointmentDate">
    
                <input type= "submit" value= "Submit"> 
        </form>
    </div>
    
</body>