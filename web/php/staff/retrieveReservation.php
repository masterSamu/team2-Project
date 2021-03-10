<?php
// This file retrieves data from reservation table
include '../database.php';

$sql = "SELECT * FROM reservation";
$result = $conn->query($sql);


$reservationArray = array();
if ($result ->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $reservationArray[$row["reservation_id"]] = array(
            'reservation_id' => $row["reservation_id"],
            'name' => $row["name"],
            'family' => $row["family"],
            'arrive_date' => $row["arrive_date"],
            'departure_date' => $row["departure_date"], 
            'adults_num' => $row["adults_num"],
            'child_num' => $row["child_num"],
            'extra_services' => $row["extra_services"],
            'room_type' => $row["room_type"],
            'total_price' => $row["total_price"],
            'reservation_date' => $row["reservation_date"]
            );
    }
    $isReservation = true;

} else {
    $isReservation = false;
}

// Free result set
mysqli_free_result($result);

// close connection
$conn->close();

?>