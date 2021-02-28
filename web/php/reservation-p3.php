
<!-- Header part -->
<?php

  $metaKeywords = "Hotel, Hämeenlinna";
  $metaDescription = "Hotel, Hämeenlinna";
  $title = "Hame Hotel - Reservation 3";
  $customCssCode = '<link href="reservation-style.css" rel="stylesheet">';

  include 'header.php';
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
                    <button id="finishBtn">Finish</button>
                </a>
            </div>
        </div>
    </div>
</div>  
<h1 id="TittleOfReservation">Confirm Reservation</h1>

<main>
    <p class="describe">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, hic recusandae. Optio eaque inventore laudantium, amet magni illum est aperiam quod 
        consequatur voluptatum. Quas nam aspernatur enim, doloribus dolorum dolor.</p>

        

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
            session_start();?>
            <div id="inputPersonalInfo" class="print-area">
                <div class="print_reservation">
                    <h4>Detail of your reservation</h4>
                    <p></p>
                    <p><?php echo '<b>Start date: </b>'.$_SESSION['start-date'].'' ;?><p>
                    <p><?php echo '<b>End date: </b>'.$_SESSION['end-date'].'' ; ?><p>
                    <p><?php echo '<b>Number of adults: </b>'.$_SESSION['adualts-number'].''; ?><p>
                    <p><?php echo '<b>Number of childeren: </b>'.$_SESSION['child-number'].'' ; ?><p>
                    
                    <?php 
                    # this if is created to print extra services
                    if (is_null($exService1) && is_null($exService2) && is_null($exService3)){
                        pass;
                    }elseif(is_null($exService1)==False && is_null($exService2) && is_null($exService3)){
                        echo "<p><b>Your extra service is: </b></p><ul>
                        <li>$exService1 - price : $exService1Price euro</li></ul>";
                    }elseif(is_null($exService2)==False && is_null($exService1) && is_null($exService3)){
                        echo "<p><b>Your extra service is: </b></p><ul>
                        <li>$exService2 - price : $exService2Price euro</li></ul>";
                    }elseif(is_null($exService3)==False && is_null($exService2) && is_null($exService1)){
                        echo "<p><b>Your extra service is: </b></p><ul>
                        <li>$exService3 - price : $exService3Price euro</li></ul>";
                    }elseif(is_null($exService1)==False && is_null($exService2)==False && is_null($exService3)){
                        echo "<p><b>Your extra services are: </b></p><ul>
                        <li>$exService1 - price : $exService1Price euro</li>
                        <li>$exService2 - price : $exService2Price euro</li></ul>";
                    }elseif(is_null($exService1)==False && is_null($exService3)==False && is_null($exService2)){
                        echo "<p><b>Your extra services are: </b></p><ul>
                        <li>$exService1 - price : $exService1Price euro</li>
                        <li>$exService3 - price : $exService3Price euro</li></ul>";
                    }elseif(is_null($exService2)==False && is_null($exService3)==False && is_null($exService1)){
                        echo "<p><b>Your extra services are: </b></p><ul>
                        <li>$exService2 - price : $exService2Price euro</li>
                        <li>$exService3 - price : $exService3Price euro</li></ul>";
                    }else{
                        echo "<p><b>Your extra services are: </b></p><ul>
                        <li>$exService1 - price : $exService1Price euro</li>
                        <li>$exService2 - price : $exService2Price euro</li>
                        <li>$exService3 - price : $exService3Price euro</li></ul>";
                    }
                    ?>
                    <p><?php echo '<b>Total price: </b>'; ?><p>

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
                        <button onclick="javascript:window.print()" type="submit" class="btn btn-primary" href="#">Print</button>
                    </div>
                </div>
            </div>
        

</main>
        
    <!-- Include footer from footer.php file -->
    <?php include 'Footer.php'; ?>
<script>

    #trying to get a totalPrice variable from reservation-p1
   let totalPrice = localStorage.getItem("totalPrice");
   //alert(totalPrice);
</script>
</body>
</html>