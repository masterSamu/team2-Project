<?php
    // This php file creates a connection to database

    $servername="localhost:3307";
    $username="testuser";
    $password="password";
    $dbname ="testuser";
    
    // creating connection 
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) 
        die("Connection failed: ".$conn->connect_error);
?>
