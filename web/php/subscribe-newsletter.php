<?php
    include 'database.php';

    // Change email field to lowercase letters before sending to database
    $email = strtolower($_POST['email']);
    
    if (empty($email)) {
        echo "Email field is empty";
    } else {
        $sql = "INSERT INTO subscriptions (email) VALUES ('$email');";

        if ($conn->query($sql) === TRUE) {
            // When query is submitted, move to homepage
            header('Location: home.php');
        } else {
            // Check if email already exist
            $sql = "SELECT email FROM subscriptions WHERE email='$email'";
            $result = $conn->query($sql);
            if($result ->num_rows > 0) {
                $emailExists = true;
            } else 
            {
                $emailExists = false;
            }

            // actions if email already exist.
            if ($emailExists == true) {
                echo 'This email has already subscribed our newsletter';
                echo '<br><button><a href="home.php">Get back to home page</a></button>';
            } else {
                echo "error: " . $sql. "<br>". $conn->error;
            }
            
        }

        // Free result set
        mysqli_free_result($result);

        $conn->close();
    }
?>