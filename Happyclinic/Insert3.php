<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => Login
        $conn = mysqli_connect ("localhost", "root", "","Login");

       // Check connection
       if($conn === false) {
          die ("ERROR: Could not connect. "
            . mysqli_connect_error());
       }

       // Taking all 5 values from the form data (input)
       $Username= $_REQUEST [ 'Username'];
       $Password = $_REQUEST ['Password'];

       // Performing insert query execution
       // here our table name is pass 
       $sql = "INSERT INTO Pass VALUES ('$Username',
         '$Password')";

         if (mysqli_query($conn,$sql)){
            echo "<h3>date stored in a database succesfully.
            </h3>";

            echo nl2br ("/n$Username/n $Password/n ");
         } else {
            echo "ERROR: Hush! Sorry $sql."
            . mysqli_error($conn);
         }


         //close connection
         mysqli_close ($conn);
         ?>
         </center>
        </body>

        </html>