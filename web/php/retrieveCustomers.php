<?php
// This file retrieves data from customers table
include '../database.php';

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);


$customerArray = array();
if ($result ->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $customerArray[$row["customer_id"]] = array(
            'customer_id' => $row["customer_id"],
            'fname' => $row["fname"],
            'lname' => $row["lname"],
            'tel' => $row["tel"],
            'email' => $row["email"], 
            'bdate' => $row["bdate"],
            'country' => $row["country"],
            'created_at' => $row["created_at"]
            );
    }
    $isCustomers = true;

} else {
    $isCustomers = false;
}

// Free result set
mysqli_free_result($result);

// close connection
$conn->close();

?>