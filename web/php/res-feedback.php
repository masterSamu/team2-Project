<?php
    // This PHP file will add feedback records to database

    include 'database.php';

    $points = $_POST['optradio'];

    if (empty($points)) {
        echo "Points field empty";
    } else {
        $sql = "INSERT INTO resfeedback (points) VALUES ('$points');";

        if ($conn->query($sql) === TRUE) {
            // When query is submitted, move to homepage
            header('Location: home.php');
        } else {
            echo "error: " . $sql. "<br>". $conn->error;
        }
        $conn->close();
    }




?>