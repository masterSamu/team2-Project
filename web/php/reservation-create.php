<?php include 'database.php' ;

session_start();
// PERSONAL INFO
$name = $_SESSION['name'];
$family = $_SESSION['family'];
$email = $_SESSION['email'];
$bDay = $_SESSION['bDay'];
$country = $_SESSION['country'];
$phone = $_SESSION['inputPhone'];

// RESERVATION INFO - comment sessions are available in this page - it is not need to define again
$exService1 = $_SESSION['exService1'];
$exService2 = $_SESSION['exService2'];
$exService3 = $_SESSION['exService3'];
$finalPrice = $_SESSION['finalPrice'];
$startDate = $_SESSION['start-date'];
$endtDate = $_SESSION['end-date'];
$adultNum = $_SESSION['adualts-number'];
$childNum = $_SESSION['child-number'];
$roomType = $_SESSION['roomName'];


// insert data to res_customers table in database
$sqlcustomers="INSERT INTO customers (fname, lname, email, tel, bdate, country)
VALUES ('$name', '$family', '$email', '$phone', '$bDay', '$country')";

// insert data to reservation table in database
$sqlreservation="INSERT INTO reservation (name, family, arrive_date, departure_date, adults_num, child_num, extra_services, room_type, total_price)
VALUES ('$name', '$family', '$startDate', '$endtDate', '$adultNum', '$childNum', '($exService1,$exService2,$exService3)', '$roomType', '$finalPrice')";


if($conn->query($sqlcustomers) === TRUE && $conn->query($sqlreservation) === TRUE) {

    echo "New records added";
    session_destroy();
}
else
{
    echo "ERROR: " .$sqlcustomers. "<br>" . $conn->error;
    echo "ERROR: " .$sqlreservation. "<br>" . $conn->error;

}
$conn->close();

?>
<br><a href="home.php" >
    <button type="submit" id="homeBtn" action="home.php">Return to home page</button>
</a>