
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

        <div id="inputPersonalInfo">

            <?php 
            $inputName = $_POST["inputName"];
            $inputMidName = $_POST["inputMidName"];
            $inputFamily = $_POST["inputFamily"];
            $inputEmail = $_POST["inputEmail"];
            $inputBday = $_POST["inputBday"];
            $inputAddress = $_POST["inputAddress"];
            $inputCity = $_POST["inputCity"];
            $inputCountry = $_POST["inputCountry"];
            

            session_start();?>
            <p></p>
            <p><?php echo '<b>Start date: </b>'.$_SESSION['start-date'].'' ;?><p>
            <p><?php echo '<b>End date: </b>'.$_SESSION['end-date'].'' ; ?><p>
            <p><?php echo '<b>Number of adults: <b>'.$_SESSION['adualts-number'].''; ?><p>
            <p><?php echo '<b>Number of childeren: <b>'.$_SESSION['child-number'].'' ; ?><p>
            
            <?php 

            echo "<p><b>Name:</b> $inputName</p>";
            echo "<p><b>Middle Name:</b> $inputMidName</p>";
            echo "<p><b>Family:</b> $inputFamily</p>";
            echo "<p><b>Email:</b> $inputEmail</p>";
            echo "<p><b>Date of Birth:</b> $inputBday</p>";
            echo "<p><b>Address:</b> $inputAddress</p>";
            echo "<p><b>City:</b> $inputCity</p>";
            echo "<p><b>Country:</b> $inputCountry</p>";


            ?>
            <div id="printBtn" class="col-12">
                <button onclick="javascript:window.print()" type="submit" class="btn btn-primary" href="#">Print</button>
            </div> 
    
        </div>

</main>
        



    <!-- Include footer from footer.php file -->
    <?php include 'Footer.php'; ?>
    <!--<script>
        const previousBtn = document.getElementById('previousBtn');
        const nextBtn = document.getElementById('nextBtn');
        const finishBtn = document.getElementById('finishBtn');
        const content = document.getElementById('content');
        const bullets = [ ...document.querySelectorAll('.bullet')];

        const Max_steps = 3;
        let currentStep = 3;
        nextBtn.addEventListener('click' , () => {
            const currentBullet = bullets[currentStep-1];
            currentBullet.classList.add('completed');
            currentStep++;
            previousBtn.disabled = false;
            if(currentStep==Max_steps){
                nextBtn.disabled = true;
                finishBtn.disabled = false;

            }
            
        });
        previousBtn.addEventListener('click' , () => {
            const previousBullet = bullets[currentStep-2];
            previousBullet.classList.remove('completed');
            currentStep--;
            nextBtn.disabled = false;
            finishBtn.disabled = true;
            if(currentStep==1){
                previousBtn.disabled = true;
            }
            

        });
        finishBtn.addEventListener('click' , () => {
            location.reload();
        })
    </script>-->
</body>
</html>