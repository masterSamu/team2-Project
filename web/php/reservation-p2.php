
<!-- Header part -->
<?php

  $metaKeywords = "Hotel, Hämeenlinna";
  $metaDescription = "Hotel, Hämeenlinne";
  $title = "Hame Hotel - Home";
  $customCssCode = '<link href="reservation-style.css" rel="stylesheet">';

  include 'header.php';
?>
<head>
    <link href="reservation-style.css" type="text/css" rel="stylesheet" href="css/datepicker.css">
    <link href="reservation-style.css" type="text/css" rel="stylesheet" href="css/bootstrap.min.css">


</head>

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
                    <div class="bullet">2</div>
                </div>
                <div class="step">
                    <p class="step-text">Step 3</p>
                    <div class="bullet">3</div>
                </div>
            </div>
            <div id="main" class="progress-buttons">
                <a href="reservation-p1.php" >
                    <button id="previousBtn">Previous</button>
                </a>
                <button id="finishBtn" disabled>Finish</button>
            </div>
        </div>
    </div>
</div>          
<main>
    </div>
    <h1 id="reservation-p2-header">Fill your personal information</h1>
    <div id="personalForm" class="personalForm">
        <?php
        session_start();
        echo"Start date: ".$_SESSION['start-date'].' --- ' ;
        echo"End date: ".$_SESSION['end-date'].'<br>' ;
        echo"Number of adults: ".$_SESSION['adults-number'].' --- ';
        echo"Number of childeren: ".$_SESSION['child-number'].'<br>' ;

        ?>
      <form  action="reservation-p3.php" method="POST" class="row g-3">
          <div class="col-4">
              <label for="inputName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="inputName" placeholder="Name" name="inputName" required pattern="[a-zA-Z]{3,}" title="Please enter your Name which should be more than 3 leters">
          </div>
          <div class="col-4">
              <label for="inputMidName" class="form-label">Middle Name</label>
              <input type="text" class="form-control" id="inputMidName" placeholder="Middle Name" name="inputMidName" >
          </div>
          <div class="col-4">
              <label for="inputFamily" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="inputFamily" placeholder="Family" name="inputFamily" required pattern="[a-zA-Z]{3,}" title="Please enter your Family which should be more than 3 leters">
          </div>
          <div class="col-md-6">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="email" name="inputEmail" required pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{1,}" title="Please enter a valid email Address">
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
    <div class="extraServices" id="extraservices">
        <h1 id="reservation-p2-header">Choose your extra services</h1>
        <div class="extra_service">
            <div class="card mb-2" style="max-width: 700px;">
                <div id="extra-service-row" class="row g-0">
                  <div class="col-md-4">
                    <img src="images/rose-petal-bath.jpeg" alt="rose petal bath ">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Rose petal bath</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ab optio illum, atque dignissimos ipsum deleniti, distinctio ut fugit 
                        adipisci nemo consequuntur laudantium modi mollitia veritatis. Earum esse quisquam quaerat.</p>
                        <form id = "service3" class="services-checkbox">
                            <label><h5>hoose Rose petal bath</h5></label> 
                            <input type="checkbox" name="service3" class="ser-checkbox"><br>  
                        </form>                      
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="extra_service">
            <div class="card mb-2" style="max-width: 700px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="images/House-Sparkling-Wine.jpg" alt="House Sparkling Wine ">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">House Sparkling Wine</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ab optio illum, atque dignissimos ipsum deleniti, distinctio ut fugit 
                        adipisci nemo consequuntur laudantium modi mollitia veritatis. Earum esse quisquam quaerat.</p>
                        <form id = "service3" class="services-checkbox">
                            <label><h5>Choose House Sparkling Wine</h5></label> 
                            <input type="checkbox" name="service3" class="ser-checkbox"><br>  
                        </form>                      
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="extra_service">
            <div class="card mb-2" style="max-width: 700px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="images/Champagne-house.jpg" alt="Champagne-house ">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Champagne-house</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ab optio illum, atque dignissimos ipsum deleniti, distinctio ut fugit 
                        adipisci nemo consequuntur laudantium modi mollitia veritatis. Earum esse quisquam quaerat.</p>
                        <form id = "service3" class="services-checkbox">
                            <label><h5>Choose Champagne-house</h5></label> 
                            <input type="checkbox" name="service3" class="ser-checkbox"><br>  
                        </form>                      
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
        <!-- create a collapse for extra services but didnt work properly

        <div class="accordion" id="services_accordion">
            <div class="accordion-item">
              <div class="accordion-header" id="headingOne">
                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <h4>Service 1</h4>
                </button>
              </div>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  <form id = "service1" class="services-checkbox">
                    <label><h5>Select Service 1 :</h5></label> 
                    <input type="checkbox" name="service1" class="ser-checkbox"><br>  
                  </form>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h4>Service 2</h4>
                </button>
              </div>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  <form id = "service2" class="services-checkbox">
                    <label><h5>Select Service 2 :</h5></label> 
                    <input type="checkbox" name="service2" class="ser-checkbox"><br>  
                  </form>
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h4>Service 3</h4>
                    </button>
                </div>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p><strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.</p>
                  <p><img class ="services_photos" id="services_photo3" src="/images/rose-petal-bath.jpeg" width="70%" alt="rose petals bath"></p>
                  <form id = "service3" class="services-checkbox">
                    <label><h5>Select Service 3 :</h5></label> 
                    <input type="checkbox" name="service3" class="ser-checkbox"><br>  
                  </form>
                </div>
              </div>
            </div>
          </div>
          -->

</main>


    <!-- Include footer from footer.php file -->
    <?php include 'Footer.php'; ?>

</body>
</html>