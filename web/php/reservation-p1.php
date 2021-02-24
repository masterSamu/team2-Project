
<!-- Header part -->
<?php

  $metaKeywords = "Hotel, Hämeenlinna";
  $metaDescription = "Hotel, Hämeenlinne";
  $title = "Hame Hotel - Home";
  $customCssCode = '<link href="reservation-style.css" rel="stylesheet">';

  include 'header.php';
?>
<div class="reservation-header">
    <div id="progressPlan" class="container2">
        <div class="steps-section">
            <div class="step-progress-bar">
                <div class="step">
                    <p class="step-text">Step 1</p>
                    <div class="bullet">1</div>
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
    <div class="date-section">
        <h2 class="describe-title">Reservation details</h2>
        <form id="date-section" action="reservation-p1.php" method="POST">
            <div class="date-selection">
                <div class="input-start-date">
                    <label for="start-date">Arriving date</label>
                    <input id="start-date" type="date" name="start-date" class="form-control select-date">
                </div>
                <div class="input-end-date">
                    <label for="end-date">Departure date</label>
                    <input type="date" id="end-date" name="end-date" class="form-control select-date">
                </div>
            </div>
            <div class="person-selection">
                <div class ="adults-number">
                    <label for="adults-number">Number of Adults: </label>
                    <input type="number" class="form-control" min="1" max="6" value="1" name="adualts-number" default="1">
                </div>
                <div class ="childeren-number">
                    <label for="childeren-number">Number of childeren: </label>
                    <input type="number" class="form-control" min="0" max="6" value="0" name="child-number" default="0">
                </div>
            </div>
            <button id="reservation-btn" type="submit" class="btn btn-primary" href="#date-section">Confirm</button>

        </form>
    <?php 
        session_start();
        $_SESSION['start-date'] = $_POST['start-date'];
        $_SESSION['end-date'] = $_POST['end-date'];
        $_SESSION['adualts-number']= $_POST['adualts-number'];
        $_SESSION['child-number']= $_POST['child-number'];

        $adult = $_SESSION['adualts-number'];
        $child = $_SESSION['child-number'];
        # calculate the number of selected days
        $startDate = new DateTime($_SESSION['start-date']);
        $endDate = new DateTime($_SESSION['end-date']);
        $difference = $endDate->diff($startDate);
        $diffNight=($difference->format("%a")); 
        
        echo '<br>'.$diffNight.'.' ;
        #$numberOfRooms 
        function corrCalculator($adult , $child) {
            $corrPrice = $adult + ($child/2);
            $corrRoom = $adult + $child ;
        }
        #create a class for rooms
        class Room {
            // Properties
            public $name;
            public $price;
            public $capacity;
          
            function __construct($name , $price , $capacity) {
                $this->name = $name;
                $this->price = $price;
                $this->capacity = $capacity;

              }
            // This method is calculate the price of room for specific room and number of persons
            function calculator($corrPrice, $corrRoom, $diffNight) {
                echo 'Daily price for '.$name.'is'.$price.'Euro<br>';
                $roomNumber = round($corrRoom/$capacity) ;
                echo 'For you'.$roomNumber.' Rooms are requiered<br>';
                $totalPrice = $corrPrice * $price * $diffNight;
                echo 'Total price for these room is: '.$totalPrice. 'euro<br>';
            }
          }
          $classicSingle = new Room("Classic Single", 40 , 1);
          $standardDouble = new Room("Standard Double", 70 , 2); 
          $classicTwins = new Room("Classic Twins", 75 , 2); 

          var_dump(get_object_vars($classicSingle));
            $classicSingle->test();
            $classicSingle->calculator($corrPrice, $corrRoom, $diffNight);
    ?>
    </div>
    <p class="describe">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, hic recusandae. Optio eaque inventore laudantium, amet magni illum est aperiam quod 
        consequatur voluptatum. Quas nam aspernatur enim, doloribus dolorum dolor.</p>
        <div class="content">
            <div class="row">
                <!-- Left side article 1 -->
                <div class="col-md-6">
                    <article>
                        <h2>Classic Single Room</h2>
                        <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque laudantium exercitationem sit
                        quam dolorum! Ipsa, id deserunt. Ad optio, labore culpa porro enim nobis.
                        Hic necessitatibus at vel ab rem. Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Laudantium modi, voluptatum, ullam dolore nam dolor autem explicabo molestiae quod,
                        facere harum corrupti quas reprehenderit inventore beatae omnis odio minima laboriosam.
                        </p>
                        <?php
                        $classicSingle->calculator($corrPrice, $corrRoom, $diffNight);
                        ?>
                        <a href="reservation-p2.php" class="btn btn-primary">Select This Room</a>
                    </article>
                </div>
                <!-- Right side image 1 -->
                <div class="col-md-6">
                    <aside>
                        <img src="images/01 - classic single room - hame hotel.GIF" class="img-fluid" alt="Classic single room photo" width="1350" height="900">
                    </aside>   
                </div>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <!-- Left side article 1 -->
                <div class="col-md-6">
                    <article>
                        <h2>Standard Double</h2>
                        <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque laudantium exercitationem sit
                        quam dolorum! Ipsa, id deserunt. Ad optio, labore culpa porro enim nobis.
                        Hic necessitatibus at vel ab rem. Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Laudantium modi, voluptatum, ullam dolore nam dolor autem explicabo molestiae quod,
                        facere harum corrupti quas reprehenderit inventore beatae omnis odio minima laboriosam.
                        </p>
                        <a href="reservation-p2.php" class="btn btn-primary">Select This Room</a>
                    </article>
                </div>
                <!-- Right side image 1 -->
                <div class="col-md-6">
                    <aside>
                        <img src="images/02 - standard twins - hame hotel.GIF" class="img-fluid" alt="Standard twins room photo" width="1350" height="900">
                    </aside>   
                </div>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <!-- Left side article 1 -->
                <div class="col-md-6">
                    <article>
                        <h2>Classic Twins Room</h2>
                        <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque laudantium exercitationem sit
                        quam dolorum! Ipsa, id deserunt. Ad optio, labore culpa porro enim nobis.
                        Hic necessitatibus at vel ab rem. Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Laudantium modi, voluptatum, ullam dolore nam dolor autem explicabo molestiae quod,
                        facere harum corrupti quas reprehenderit inventore beatae omnis odio minima laboriosam.
                        </p>
                        <a href="reservation-p2.php" class="btn btn-primary">Select This Room</a>
                    </article>
                </div>
                <!-- Right side image 1 -->
                <div class="col-md-6">
                    <aside>
                        <img src="images/03 - standard double - hame hotel.GIF" class="img-fluid" alt="Standard double room photo" width="1350" height="900">
                    </aside>   
                </div>
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
        let currentStep = 1;
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