<?php

// This file retrieves all subscirbers from database and put them into html table
include '../database.php'; 
    $sql = "select * from subscriptions";
    $result = $conn->query($sql);

    $subscribers = array();

    if ($result ->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $subscribers[$row["email"]] = $row["timestamp"];
        }
    } else {
        echo "There are no any subscribers";
    }

    // Free result set
    mysqli_free_result($result);

    // close connection
    $conn->close();

?>