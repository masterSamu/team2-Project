<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styling -->
        <!--fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">    

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!-- Custom CSS -->
        <link href="../Default.css" rel="stylesheet">
        <link href="staffpage-styling.css" rel="stylesheet">

    <title>Staff area</title>
</head>
<body>
    
    <div class="container-fluid">
        <!-- Heading -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <h1>Hame Hotel Management Site</h1>
                </div>
            </div>
        </div>

        <!-- Bookings -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <h2>Bookings</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>Customer table</h4>
                    <input type="text" id="searchCustomer" onkeyup="searchCustomer()" placeholder="Search for lastname">
                    <script>
                        function searchCustomer() {
                        let input, filter, table, tr, td, i, txtValue;
                        input = document.getElementById("searchCustomer");
                        filter = input.value.toLowerCase();
                        table = document.getElementById("reservation-table");
                        tr = table.getElementsByTagName("tr");

                        // Loop through all table rows, and hide those that don't match the search
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[2]; // index [2] means lastname
                            if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toLowerCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                            }
                        }
                        }
                    </script>
                    <div class="tableFixHead">
                        <table id="reservation-table" class="big-table">
                        
                            <tr>
                                <th>ID</th>
                                <th>fname</th>
                                <th>lname</th>
                                <th>tel</th>
                                <th>email</th>
                                <th>bdate</th>
                                <th>country</th>
                                <th>created_at</th>
                            </tr>
                            <?php
                                include 'retrieveCustomers.php';
                                foreach ($customerArray as $row) {
                                    echo '<tr>';
                                    foreach($row as $cell) {
                                        echo '<td>'. $cell. '</td>';
                                    }
                                    echo '</tr>';
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

         <!-- Newsletter subscribers -->
        <div class="content">
            <div class="row" id="subscriber-row">
                <div class="col-md-12">
                    <h2>Newsletter subscribers</h2>
                    <p>Here you can view information of our subscribers</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                   <table class="small-table">
                    <?php 
                    include 'retrieveSubscribers.php'; 

                    $numberOfSubscribers = count($subscribers);
                    echo '<tr>
                            <th>Amount of subscribers</th>
                            <td>'. $numberOfSubscribers. '</td>
                        </tr>';
                    ?>
                   </table>
                   <input type="text" id="searchEmail" onkeyup="searchEmail()" placeholder="Search for email">
                   <script>
                        // function to search emails from table
                        function searchEmail() {
                            let input, filter, table, tr, td, i, txtValue;
                            input = document.getElementById("searchEmail");
                            filter = input.value.toLowerCase();
                            table = document.getElementById("email-table");
                            tr = table.getElementsByTagName("tr");

                            // Loop through all table rows, and hide those that don't match the search
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[0]; // index [0] means email
                                if (td) {
                                    txtValue = td.textContent || td.innerText;
                                    if (txtValue.toLowerCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }
                            }
                        }
                    </script>

                    <hr>
                    <form onsubmit="confirmUnsub()"  action="remove-subscription.php" method="POST">
                        <h6 id="removeEmailh6">Remove email from subscriber list</h6>
                        <input type="email" id="deleteEmail" name="email"  placeholder="Remove email" required>
                        <br><label id="lblUnsub"><input type="checkbox" id="checkUnsub" name="checkbox">Confirm removing email</label>
                        <br><input type="submit" class="btn btn-primary" id="submitUnsubscribe" value="Unsubscribe">
                    </form>
                    <script>
                        function confirmUnsub() {
                            let checkBox = document.getElementById("checkUnsub");
                            if (!checkBox.checked) {
                                event.preventDefault();
                                document.getElementById("lblUnsub").style.color = "red";
                                document.getElementById("lblUnsub").style.fontSize = "1.2rem";
                                return false;
                            } else {
                                alert("You have succesfully removed email from subscription list");
                                return true;
                            }
                        }
                    </script>
                </div>
                <div class="col-md-8">
                <div class="tableFixHead">
                <table class="big-table" id="email-table">
                        <tr>
                            <th>email address</th>
                            <th>timestamp</th>
                        </tr>
                            <?php
                                // Add subscriber data to table
                                foreach ($subscribers as $email => $timestamp) {
                                    echo 
                                        '<tr>
                                            <td>'. $email. '</td><td>'. $timestamp. '</td>
                                        </tr>';
                                }
                            ?>
                    </table>
                    
                </div>
                </div>
            </div>
        </div>

        <!-- Feedback results -->
        <div class="content">
            <div class="row" id="feedback-row">
                <div class="col-md-12">
                    <h2>Feedback Results</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?php
                    include 'retrieveFeedback.php';
                    $amountOfFeedback = count($points);
                    $averagePoints = array_sum($points) / $amountOfFeedback;
                    $roundedAverage = round($averagePoints, 2);

                    echo 
                    '<table class="small-table">
                        <tr>
                            <th>Amount</th>
                            <td>'. $amountOfFeedback. '</td>
                        </tr>
                        <tr>
                            <th>Average</th>
                            <td>'. $roundedAverage. '</td>
                        </tr>            
                    
                    </table>
                    '; ?>
                    
                </div>
                <div class="col-md-8">
                    <?php 
                        $onepointArray = array_filter(
                            $points,
                            function ($value) {
                                return ($value == 1);
                            }
                        );

                        $twopointArray = array_filter(
                            $points,
                            function ($value) {
                                return ($value == 2);
                            }
                        );

                        $threepointArray = array_filter(
                            $points,
                            function ($value) {
                                return ($value == 3);
                            }
                        );
                        
                        
                    echo '
                    <script>
                        window.onload = function () {

                        var chart = new CanvasJS.Chart("chartContainer", {
                            animationEnabled: true,
                            theme: "light1", // "light1", "light2", "dark1", "dark2"
                            title:{
                                text: "Reservation Feedback",
                                padding: 20
                            },
                            legend: {
                                fontSize: 20,
                            },
                            axisY: {
                                title: "count",
                                titleFontSize: 30,
                            },
                            data: [{        
                                type: "column",  
                                showInLegend: true, 
                                legendMarkerColor: "grey",
                                legendText: "Points",
                                dataPoints: [      
                                    { y: '. count($onepointArray). ', label: "Bad" },
                                    { y: '. count($twopointArray). ',  label: "Neutral" },
                                    { y: '. count($threepointArray). ',  label: "Easy" },
                                ]
                            }]
                        });
                        chart.render();

                        }
                        </script>
                        ';?>
                    <div id="chartContainer" style="height: 370px; width: 95%;"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>