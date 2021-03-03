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
                    <h1>Hame Hotel Staff Site</h1>
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
                </div>
                <div class="col-md-8">
                <div class="tableFixHead">
                <table class="big-table">
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