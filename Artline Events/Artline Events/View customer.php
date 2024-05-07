<?php

require("connection.php");

if(isset($_POST['customer_id'])) {
    $customer_id = $_POST['customer_id'];

    $sql = "SELECT * FROM customer WHERE ID = '$customer_id'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Display customer details
        $row = mysqli_fetch_assoc($result);
        echo "<h3>Customer Details for Customer ID: $customer_id</h3>";
        echo "<p><strong>Full Name:</strong> {$row['FullName']}</p>";
        echo "<p><strong>Email:</strong> {$row['Email']}</p>";
        echo "<p><strong>Phone:</strong> {$row['Phone']}</p>";
        echo "<p><strong>Gender:</strong> {$row['Gender']}</p>";
    } else {
        echo "<p>No customer found for Customer ID: $customer_id</p>";
    }
} else {
    echo "<p>Please enter a Customer ID.</p>";
}

?>
