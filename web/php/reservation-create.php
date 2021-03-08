<?php include 'database.php' ;

session_start();
// PERSONAL INFO
$name = $_SESSION['name'];
$family = $_SESSION['family'];
$email = $_SESSION['email'];
$bDay = $_SESSION['bDay'];
$country = $_SESSION['country'];

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

// Check if customer already exist in customer table
include 'retrieveCusomers';
    if (in_array($email, $customerArray)) {
        // don't do anything, because customer already exist in table
    } else {
        // add customer information into table
        $sqlcustomers="INSERT INTO customers (fname, lname, email, tel, bdate, country)
        VALUES ('$name', '$family', '$email', '$phone', '$bDay' '$country' )";
    }


// insert data to reservation table in database
$sqlreservation="INSERT INTO reservation (arrive_date, departure_date, adults_num, child_num, extra_services, room_type, total_price)
VALUES ('$startDate', '$endtDate', '$adultNum', '$childNum', '($exService3,$exService3,$exService3)', '$roomType', '$finalPrice')";

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