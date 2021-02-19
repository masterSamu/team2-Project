<?php
    include 'database.php';

    $email = $_POST['email'];
    
    if (empty($email)) {
        echo "Email field is empty";
    } else {
        $sql = "INSERT INTO subscriptions (email) VALUES ('$email');";

        if ($conn->query($sql) === TRUE) {
            // When query is submitted, move to homepage
            header('Location: home.php');
        } else {
            echo "error: " . $sql. "<br>". $conn->error;
        }
        $conn->close();
    }




?>