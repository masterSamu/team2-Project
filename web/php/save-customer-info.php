<?php 
// This php file will save customer information to database
include 'database.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$bdate = $_POST['bdate'];

if (empty($fname) || empty($lname) || empty($email) || empty($tel) || empty($bdate)) {
    // mark empty fields
} else {
    $sql ="INSERT INTO customers (fname, lname, email, tel, bdate) VALUES 
        (
        '$fname',
        '$lname',
        '$email',
        '$tel',
        '$bdate'
        )";

    if ($conn->query($sql) === TRUE) {
        // do something if query complete succcesfully
    } else {
        echo "error: " . $sql. "<br>". $conn->error;
    }
    $conn->close();
}

?>