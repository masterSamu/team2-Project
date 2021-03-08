<?php
    include '../database.php';

    $email = $_POST['email'];
    $sql = "DELETE FROM subscriptions WHERE email='$email'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        $delEmailMessage = "Email removed succesfully";
        header('Location: staffpage.php');
    } else {
        $delEmailMessage = "Unsubscription failed";
    }
    mysqli_free_result($result);
    $conn ->close();
?>