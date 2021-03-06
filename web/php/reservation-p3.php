
<!-- Header part -->
<?php

  $metaKeywords = "Hotel, Hämeenlinna";
  $metaDescription = "Hotel, Hämeenlinna";
  $title = "Hame Hotel - Reservation 3";
  $customCssCode = '<link href="reservation-style.css" rel="stylesheet">';
  $scripts = '<script src="scripts/validateFeedback.js"></script>';
  include 'header.php';
  include 'room-class.php'
?>


<div class="reservation-header">
    <div id="progressPlan" class="container2">
        <div class="steps-section">
            <div class="step-progress-bar">
                <div class="step">
                    <p class="step-text">Step 1</p>
                    <div class="bullet completed">1</div>
                </div>
                <div class="step">
                    <p class="step-text">Step 2</p>
                    <div class="bullet completed">2</div>
                </div>
                <div class="step">
                    <p class="step-text">Step 3</p>
                    <div class="bullet">3</div>
                </div>
            </div>
            <div id="main" class="progress-buttons">
                <a href="reservation-p2.php" >
                    <button id="previousBtn">Previous</button>
                </a>
                <a href="home.php" >
                    <button type="submit" id="finishBtn" action="reservation-create.php">Finish</button>
                </a>
            </div>
        </div>
    </div>

</div>  
<h1 id="TittleOfReservation">Confirm Reservation</h1>

    <main>

        <!-- Feedback form (easy = 3points, managable = 2p, difficult = 1p) -->
        <div class="container" id="feedback-container">
            <h2>What do you think about our reservation process?</h2>
            <form id="res-feedback-form" name="res-feedback" onsubmit="validateFeedback()" action="res-feedback.php" target="iframe-res" method="POST">
                <div class="row" id="res-feedback-radio-row">
                    <div class="col-md-4">
                        <div class="row-radioButtons">
                            <input type="radio" name="optradio" class="input-feedback" id="res-feedback-radio1" value="1">
                            <label for="res-feedback-radio1">
                                <img class="img-fluid" src="images/anxious-emoji.png" alt="anxious">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row-radioButtons">
                            <input type="radio" name="optradio" class="input-feedback" id="res-feedback-radio2" value="2">
                            <label for="res-feedback-radio2">
                                <img class="img-fluid" src="images/neutral-emoji.png">
                            </label>
                        </div>  
                    </div>
                    <div class="col-md-4">
                        <div class="row-radioButtons">
                            <input type="radio" name="optradio" class="input-feedback" id="res-feedback-radio3" value="3">
                            <label for="res-feedback-radio3">
                                 <img class="img-fluid" src="images/easy-emoji.png" max-width="160" max-height="160">
                            </label>
                        </div>
                    </div>
                    <!-- Complete reservation -->
                    <div class="row-radioButtons">
                        <input type="submit" id="res-feedback-submit" class="btn btn-primary" value="Submit feedback">
                        <div class="row">
                            <!-- Form error message -->
                            <p id="error"></p>
                            <p id="feedback-message"></p>
                    </div>
                    <!-- Iframe target for feedback -->
                    <div style="visibility:hidden">
                        <iframe id="iframe-res" name="iframe-res" width="5" height="5"></iframe>
                    </div>
                </div>
            </form>
        </div>                            

            <?php 
            $inputName = $_POST["inputName"];
            $inputFamily = $_POST["inputFamily"];
            $inputEmail = $_POST["inputEmail"];
            $inputBday = $_POST["inputBday"];
            $inputCountry = $_POST["inputCountry"];
            
            $exService1 = $_POST["service1"];
            $exService2 = $_POST["service2"];
            $exService3 = $_POST["service3"];
            $exService1Price = 30;
            $exService2Price = 50;
            $exService3Price = 45;
            session_start();

            // bring corrolations to this page to calculate the price again for safty
            $corrPrice = $_SESSION['corrPrice'] ;
            $corrRoom = $_SESSION['corrRoom'];
            $diffNight = $_SESSION['diffNight'];
            # Here we are creating objects for each room again
            # Check for holidays, in holidays the prices is 1.5*roomPrice
            $startHolidays = $_SESSION['startHolidays'] ;
            $endHolidays = $_SESSION['endHolidays'] ;
            $startDate = $_SESSION['start-date'];
            $endDate = $_SESSION['end-date'];

            // check for holidays to create an objetct from room Class
            if ($startDate >= $startHolidays && $endDate<= $endHolidays){
                echo "Your date is in holidays";
                $classicSingle = new Room("Classic Single", 1.5*40 , 1);
                $standardDouble = new Room("Standard Double", 1.5*70 , 2); 
                $classicTwins = new Room("Classic Twins", 1.5*75 , 2);
            }else{
                $classicSingle = new Room("Classic Single", 40 , 1);
                $standardDouble = new Room("Standard Double", 70 , 2); 
                $classicTwins = new Room("Classic Twins", 75 , 2);
            }
            
            $selectedRoom = $_SESSION['room'];
            // calculate the total price again related to selected room
            if ($selectedRoom == 1){
                $classicSingle->calculator($corrPrice, $corrRoom, $diffNight);
                $totalprice = $classicSingle->totalPrice;
                $roomType = $classicSingle->name;
            }elseif($selectedRoom == 2){
                $standardDouble->calculator($corrPrice, $corrRoom, $diffNight);
                $totalprice = $standardDouble->totalPrice;
                $roomType = $standardDouble->name;
            }else{
                $classicTwins->calculator($corrPrice, $corrRoom, $diffNight);
                $totalprice = $classicTwins->totalPrice;
                $roomType = $classicTwins->name;
            }

            ?>
            <div id="inputPersonalInfo" class="print-area">
                <div class="print_reservation">
                    <h4>Detail of your reservation</h4>
                    <p></p>
                    <p><?php echo '<b>Start date: </b>'.$_SESSION['start-date'].'' ;?><p>
                    <p><?php echo '<b>End date: </b>'.$_SESSION['end-date'].'' ; ?><p>
                    <p><?php echo '<b>Number of adults: </b>'.$_SESSION['adualts-number'].''; ?><p>
                    <p><?php echo '<b>Number of childeren: </b>'.$_SESSION['child-number'].'' ; ?><p>
                    <p><?php echo '<b>Price for Rooms: </b>'.$totalprice.' euro'; ?><p>
                    <p><?php echo '<b>Type of room: </b>'.$roomType ; ?><p>

                    <?php 
                    $final_price = 0;

                    # this if is created to print extra services
                    if (is_null($exService1) && is_null($exService2) && is_null($exService3)){
                        $final_price = $totalprice;
                        
                    }elseif(is_null($exService1)==False && is_null($exService2) && is_null($exService3)){
                        echo "<p><b>Your extra service is: </b></p><ul>
                        <li>$exService1 - price : $exService1Price euro</li></ul>";
                        $final_price =$totalprice+$exService1Price;
                    }elseif(is_null($exService2)==False && is_null($exService1) && is_null($exService3)){
                        echo "<p><b>Your extra service is: </b></p><ul>
                        <li>$exService2 - price : $exService2Price euro</li></ul>";
                        $final_price = $totalprice+$exService2Price;
                    }elseif(is_null($exService3)==False && is_null($exService2) && is_null($exService1)){
                        echo "<p><b>Your extra service is: </b></p><ul>
                        <li>$exService3 - price : $exService3Price euro</li></ul>";
                        $final_price = $totalprice+$exService3Price;
                    }elseif(is_null($exService1)==False && is_null($exService2)==False && is_null($exService3)){
                        echo "<p><b>Your extra services are: </b></p><ul>
                        <li>$exService1 - price : $exService1Price euro</li>
                        <li>$exService2 - price : $exService2Price euro</li></ul>";
                        $final_price = $totalprice+$exService1Price+$exService2Price;

                    }elseif(is_null($exService1)==False && is_null($exService3)==False && is_null($exService2)){
                        echo "<p><b>Your extra services are: </b></p><ul>
                        <li>$exService1 - price : $exService1Price euro</li>
                        <li>$exService3 - price : $exService3Price euro</li></ul>";
                        $final_price = $_SESSION['totalprice']+$exService1Price+$exService3Price;

                    }elseif(is_null($exService2)==False && is_null($exService3)==False && is_null($exService1)){
                        echo "<p><b>Your extra services are: </b></p><ul>
                        <li>$exService2 - price : $exService2Price euro</li>
                        <li>$exService3 - price : $exService3Price euro</li></ul>";
                        $final_price = $_SESSION['totalprice']+$exService2Price+$exService3Price;

                    }else{
                        echo "<p><b>Your extra services are: </b></p><ul>
                        <li>$exService1 - price : $exService1Price euro</li>
                        <li>$exService2 - price : $exService2Price euro</li>
                        <li>$exService3 - price : $exService3Price euro</li></ul>";
                        $final_price = $_SESSION['totalprice']+$exService1Price+$exService2Price+$exService3Price;

                    }
                    ?>
                    <p><?php echo '<b>TOTAL PRICE : '. $final_price.' euro</b>'; ?><p>

                </div>
                <div class="print_personal">
                    <h4>your Personal Information</h4>
                    <?php
                    echo "<p><b>Name:</b> $inputName</p>";
                    echo "<p><b>Family:</b> $inputFamily</p>";
                    echo "<p><b>Email:</b> $inputEmail</p>";
                    echo "<p><b>Date of Birth:</b> $inputBday</p>";
                    echo "<p><b>Country:</b> $inputCountry</p>";
                    ?>

                    <div id="printBtn" class="col-12">
                        <button id="printButton" onclick="javascript:window.print()" type="submit" class="btn btn-primary" href="#">Print Reservation Details</button>
                    </div>
                </div>
            </div>
        

    <?php 
    //create a sessions to pass all data to reservation-create.php for insert to database
    // PERSONAL INFO
    $_SESSION['name']=$inputName;
    $_SESSION['family']=$inputFamily;
    $_SESSION['email']=$inputEmail;
    $_SESSION['bDay']=$bDay;
    $_SESSION['country']=$inputCountry;

    // RESERVATION INFO - comment sessions are available in this page - it is not need to define again
    $_SESSION['finalPrice'] = $final_price;
    $_SESSION['exService1'] = $exService1;
    $_SESSION['exService2'] = $exService2;
    $_SESSION['exService3'] = $exService3;

    //$_SESSION['start-date'];
    //$_SESSION['end-date'];
    //$_SESSION['adualts-number'];
    //$_SESSION['child-number'];
    //$_SESSION['roomName'];
    ?>
</main>
        
    <!-- Include footer from footer.php file -->
    <?php include 'Footer.php'; ?>
<script>

</script>
</body>
</html>