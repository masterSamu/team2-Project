
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
      <div id="date-rsault">
        <?php
        session_start();

        if ($_POST['button1']=="Select Classic Single"){
          $_SESSION['room'] = 1;
        }elseif($_POST['button2']=="Select Standard Double"){
          $_SESSION['room'] = 2;
        }elseif($_POST['button3']=="Select Classic Twins"){
          $_SESSION['room'] = 3;
        }else{
          pass;
        }
        
        echo $_POST['button1'];
        echo $_POST['button2'];
        echo $_POST['button3'];
        

        ?>

        <p><?php echo 'Start date: '.$_SESSION['start-date'].' ' ;?><p>
        <p><?php echo 'End date: '.$_SESSION['end-date'].'<br>' ; ?><p>
        <p><?php echo 'Number of adults: '.$_SESSION['adualts-number'].'<br> '; ?><p>
        <p><?php echo 'Number of childeren: '.$_SESSION['child-number'].'<br>' ; ?><p>
        
      </div>
      <div id="form-personal">
      <div id="error" ></div>

        <!-- FORM IS START HERE-->
        <form  id="main-form" action="reservation-p3.php" method="POST" class="row g-3">
          <div class="col-5">
              <label for="inputName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="inputName" placeholder="Name" name="inputName"  pattern="[a-zA-Z]{3,}" title="Please enter your Name which should be more than 3 leters" required>
          </div>
          <div class="col-7">
              <label for="inputFamily" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="inputFamily" placeholder="Family" name="inputFamily"  pattern="[a-zA-Z]{3,}" title="Please enter your Family which should be more than 3 leters" required>
          </div>
          <div class="col-md-8">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="email" name="inputEmail" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" title="Please enter a valid email Address" onkeydown="validation()" required>
          </div>
          <div class="col-md-4">
              <label for="inputBday" class="form-label">Date of birth</label>
              <input type="date" class="form-control" id="inputBday" max="<?php echo date('Y-m-d');?>" name="inputBday" required>
          </div>
          <div class="col-5">
              <label for="inputCountry" class="form-label">Country</label>
              <input type="text" class="form-control" id="inputCountry" placeholder="Country" name="inputCountry" pattern="[a-zA-Z]{2,}" title="Please enter your country">
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
                          <div id = "service3" class="services-checkbox">
                            <input type="checkbox" name="service1" class="ser-checkbox" value="Rose petal bath"> 
                            <label><h5>Rose petal bath</h5></label> 
                          </div>                      
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
                          <div id = "service3" class="services-checkbox">
                              <input type="checkbox" name="service2" class="ser-checkbox" value="House Sparkling Wine"> 
                              <label><h5>House Sparkling Wine</h5></label> 
                          </div>                      
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
                          <h5 class="card-title">Champagne house</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ab optio illum, atque dignissimos ipsum deleniti, distinctio ut fugit 
                            adipisci nemo consequuntur laudantium modi mollitia veritatis. Earum esse quisquam quaerat.</p>
                          <div id = "service3" class="services-checkbox">
                            <input type="checkbox" name="service3" class="ser-checkbox" value="Champagne house">
                            <label><h5>Champagne house</h5></label> 
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            <div class="col-12">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck" required>
                  <label class="form-check-label" for="gridCheck">
                      I hereby declare that the information provided is true and correct
                  </label>
              </div>
            </div>
            <div class="col-12">
              <button id="personalBtn" type="submit" class="btn btn-primary" href="reservation-p3">Confirm</button>
              <p><br></p>
            </div>
          </div>
        </form>
        <!-- FORM IS END HERE-->

      </div>

</main>

  <script>
    const name = document.getElementById('inputName')
    const family = document.getElementById('inputFamily')
    const email = document.getElementById('inputEmail')
    const bDay = document.getElementById('inputBday')
    const country = document.getElementById('inputCountry')

    const errorElement = document.getElementById('error')

    const form = document.getElementById('main-form')

    form.addEventListener('submit' , (e)=> {
      let messages = []

      // JS validation for required field
      if (name.value === '' || name.value ==null){
        messages.push('Name is required')
      }
      if (family.value === '' || family.value ==null){
        messages.push('Family is required')
      }
      if (email.value === '' || email.value ==null){
        messages.push('Email is required')
      }
      if (bDay.value === '' || bDay.value ==null){
        messages.push('Choose your currect birthday')
      }

        // JS validation for lenght of name 
      if (name.value.length <=3 || name.value.length>= 50){
        messages.push('Your name should have 3 to 50 letters')
      }


      // this part dont let the empty form submited 
      // this part also print the errors in div with id='error' which is right top of the form element
      if (messages.length > 0 ){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
      }  
    })

    // JS email validation
    function validation(){
      var form = document.getElementById('main-form');
      var email = document.getElementById('inputEmail').value;
      var text = document.getElementById('text');
      var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

      if (email.match(pattern)){
        form.classList.add('valid');
        form.classList.remove('invalid');
        text.style.color = "#00ff00";

      }else{
        form.classList.remove('valid');
        form.classList.add('invalid');
        messages.push('Please write a valid email address')
        text.style.color = "#ff0000";
      }

      if (email== ""){
        form.classList.remove('valid');
        form.classList.remove('invalid');
        text.innerHTML = "";

    }
  </script>
    <!-- Include footer from footer.php file -->
    <?php include 'Footer.php'; ?>
