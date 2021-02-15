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
                <div class="bullet">2</div>
            </div>
            <div class="step">
                <p class="step-text">Step 3</p>
                <div class="bullet">3</div>
            </div>
        </div>

        <div id="main">
            <a href="reservation-p1.php" >
                <button id="previousBtn">Previous</button>
            </a>
            <button id="finishBtn" disabled>Finish</button>
            <p><br></p>
            <h4 id="content">Personal Information</h4>

        </div>
    </div>
    <main>
        <p class="describe">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, hic recusandae. Optio eaque inventore laudantium, amet magni illum est aperiam quod 
            consequatur voluptatum. Quas nam aspernatur enim, doloribus dolorum dolor.</p>
        <div id="personalForm" class="personalForm">
            <form  action="reservation-p3.php" method="POST" class="row g-3">
                <div class="col-4">
                    <label for="inputName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Name" name="inputName" required>
                </div>
                <div class="col-4">
                    <label for="inputMidName" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="inputMidName" placeholder="Middle Name" name="inputMidName" >
                </div>
                <div class="col-4">
                    <label for="inputFamily" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputFamily" placeholder="Family" name="inputFamily" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="email" name="inputEmail" required>
                </div>
                <div class="col-md-6">
                    <label for="inputBday" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" id="inputBday" name="inputBday" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Address">
                </div>
                <div class="col-md-3">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" name="inputCity">
                </div>
                <div class="col-md-3">
                    <label for="inputCountry" class="form-label">Country</label>
                    <input type="text" class="form-control" id="inputCountry" name="inputCountry">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            I hereby declare that the information provided is true and correct
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button id="personalBtn" type="submit" class="btn btn-primary" href="reservation-p3">Confirm</button>
                </div>
                <p><br></p>
            </form>
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
        let currentStep = 2;
        nextBtn.addEventListener('click' , () => {
            const currentBullet = bullets[currentStep-1];
            currentBullet.classList.add('completed');
            currentStep++;
            previousBtn.disabled = false;
            if(currentStep==Max_steps){
                nextBtn.disabled = true;
                finishBtn.disabled = false;

            }
            content.innerText = `Step Number ${currentStep}`;
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
            content.innerText = `Step Number ${currentStep}`;

        });
        finishBtn.addEventListener('click' , () => {
            location.reload();
        })
    </script>-->
</body>
</html>