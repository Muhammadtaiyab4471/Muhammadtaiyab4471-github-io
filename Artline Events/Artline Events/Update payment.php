<?php 

$server = "localhost";
$username = "root";
$password = "";
$db = "artline"; // connecting to DB

try {
    if(isset($_POST['paymentupdate'])){
        $BookingID = $_POST['BookingID'];
        $EventID = $_POST['EventID'];
        $pay = $_POST['pay'];

        $conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE booking SET Payment=:payment WHERE BookingID=:booking_id";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':payment', $pay);
        $stmt->bindParam(':booking_id', $BookingID);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>

