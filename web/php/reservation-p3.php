<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Hotel, Room, Restaurant, Hämeenlinna">
    <meta name="description" content="Hotel restaurant in Hämeenlinna">
    <meta name="author" content="Samu Uunonen">
    <!-- Styling files -->
    <link href="reservation-style.css" rel="stylesheet">
    <?php include 'styling-links.php'; ?>
    <title>Reservation page2</title>

</head>
<body>
    <!-- Include navigation bar from navbar.php file -->
    <?php include 'navbar.php'; ?>

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
            <h4 id="content">Confirm Reserve Information</h4>

        </div>
    </div>
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