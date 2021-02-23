
<!-- Header part -->
<?php

  $metaKeywords = "Hotel, Hämeenlinna";
  $metaDescription = "Hotel, Hämeenlinna";
  $title = "Hame Hotel - Reservation 3";
  $customCssCode = '<link href="reservation-style.css" rel="stylesheet">';
  $scripts = '<script src="scripts/validateFeedback.js"></script>';
  include 'header.php';
?>


    <div id="progressPlan" class="container2">
        <h2 id="describe-title">Step progress Bar</h2>
        <div id="stepProgressBar">
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

        <div id="main">
            <a href="reservation-p2.php">
                <button id="previousBtn">Previous</button>
            </a>
            <a href="home.php">
                <button id="finishBtn">Finish</button>
            </a>
            <p><br></p>
            <h1 id="TittleOfReservation">Confirm Reservation</h1>

        </div>
    </div>
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