<?php 
// This php file will save customer information to database
include 'database.php';

$fname = strtolower($_POST['fname']);
$lname = strtolower($_POST['lname']);
$email = strtolower($_POST['email']);
$tel = strtolower($_POST['tel']);
$bdate = strtolower($_POST['bdate']);
$country = strtolower($_POST['country']);

if (empty($fname) || empty($lname) || empty($email) || empty($tel) || empty($bdate)) {
    echo "unvalid input";
} else {
    if (empty($country)) {
        $sql ="INSERT INTO customers (fname, lname, email, tel, bdate) VALUES 
        (
        '$fname',
        '$lname',
        '$email',
        '$tel',
        '$bdate'
        )";
    } else {
        $sql ="INSERT INTO customers (fname, lname, email, tel, bdate, country) VALUES 
        (
        '$fname',
        '$lname',
        '$email',
        '$tel',
        '$bdate',
        '$country'
        )";
    }
    

    if ($conn->query($sql) === TRUE) {
        // When query is submitted
    } else {
        echo "error: " . $sql. "<br>". $conn->error;
    }
    $conn->close();
}

?>