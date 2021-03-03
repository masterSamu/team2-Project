<?php
    // this file retrieves data from feedback database
    include '../database.php';

    $sql = "SELECT points FROM resfeedback";
    $result = $conn->query($sql);

    $points = array();
    if ($result ->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($points, $row["points"]);
        }
    } else {
        echo "There are no feedback";
    }

    // Free result set
    mysqli_free_result($result);

    // close connection
    $conn->close();

?>