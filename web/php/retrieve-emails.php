<?php

// This file will retrieve emails from subscriptions table and check if email already exists.
// $emailExists returns true if email exists and false if not exist.

    include 'database.php'; 
    $sql = "SELECT email FROM subscriptions WHERE email='$email'";
    $result = $conn->query($sql);
    if($result ->num_rows > 0) {
        $emailExists = true;
    } else 
    {
        $emailExists = false;
    }
    
    $conn->close();

    
?>


