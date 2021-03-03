
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
                    <button id="previousBtn" disabled>Previous</button>
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
        

        # create a corrolation which is going to calculate the price for different number of customers
        $corrPrice = $adult + ($child/2);
        # create a corrolation which is going to calculate the number of rooms
        $corrRoom = $adult + $child ;

        #create a class for rooms
        class Room {
            // Properties
            public $name;
            public $price;
            public $capacity;
            public $roomNumber;
            public $totalPrice;
            
            # this is a constructor
            function __construct(string $name ,int $price , int $capacity) {
                $this->name = $name;
                $this->price = $price;
                $this->capacity = $capacity;

              }
            # This method is calculate the price and number of rooms for specific room and number of persons
            function calculator($corrPrice , $corrRoom , $diffNight ) {
                $this->roomNumber = round($corrRoom/$this->capacity);
                $this->totalPrice = $corrPrice * $this->price * $diffNight;
                echo 'Daily price for '.$this->name.' room is '.$this->price.' Euro<br>';
                echo 'For you '.$this->roomNumber.' Rooms are requiered<br>';
                echo ' you have selected '.$diffNight.' days<br>';
                echo 'Total price for this room for '.$diffNight.' days is: '.$this->totalPrice. ' euro<br>';
            }
          }

          # Here we are creating objects for each room 
 

          # Check for holidays, in holidays the prices is 1.5*roomPrice
          $startHolidays = new DateTime('2021-12-15');
          $endHolidays = new DateTime('2022-01-15');

          if ($startDate>= $startHolidays && $endDate>= $endHoliday){
            echo "Your date is in holidays";
            $classicSingle = new Room("Classic Single", 1.5*40 , 1);
            $standardDouble = new Room("Standard Double", 1.5*70 , 2); 
            $classicTwins = new Room("Classic Twins", 1.5*75 , 2);
          }else{
            $classicSingle = new Room("Classic Single", 40 , 1);
            $standardDouble = new Room("Standard Double", 70 , 2); 
            $classicTwins = new Room("Classic Twins", 75 , 2);

          }
          #var_dump(get_object_vars($classicSingle));
            #$classicSingle->test();      
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
                        <p>
                            <?php
                            if (is_null($_SESSION['start-date']) || is_null($_SESSION['end-date'])){
                                echo "fill the date to claculate the prices";
                            }else{
                            # using the calculator function to calculate and print the price and number of rooms
                                $classicSingle->calculator($corrPrice, $corrRoom, $diffNight);
                            }

                            ?>
                        </p>
                        <a id="selectClassicSingle" href="reservation-p2.php" class="btn btn-primary">Select This Room</a>
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
                        <p>
                        <?php
                            if (is_null($_SESSION['start-date']) || is_null($_SESSION['end-date'])){
                                echo "fill the date to claculate the prices";
                            }else{
                                # using the calculator function to calculate and print the price and number of rooms
                                $standardDouble->calculator($corrPrice, $corrRoom, $diffNight);
                            }
                            ?>
                        </p>
                        <a id="selectStandardDouble" href="reservation-p2.php" class="btn btn-primary">Select This Room</a>
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
                        <p>
                        <?php
                            if (is_null($_SESSION['start-date']) || is_null($_SESSION['end-date'])){
                                echo "fill the date to claculate the prices";
                            }else{
                                # using the calculator function to calculate and print the price and number of rooms
                                $classicTwins->calculator($corrPrice, $corrRoom, $diffNight);
                            }
                            ?>
                        </p>
                        <a id="selectClassicTwins" href="reservation-p2.php" class="btn btn-primary">Select This Room</a>
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
    <script>

    //with select any rooms the total price is going to totalPrice js variable
    const selectClassicSingle = document.getElementById('selectClassicSingle');
        selectClassicSingle.addEventListener('click' , () => {
            let totalPrice = <?php echo $classicSingle->totalPrice ?>;
            
            //here we are trying to pass totalPrice js variable to reservation-p3
            localStorage.setItem("totalPrice", totalPrice);
            window.document.location = "reservation-p3.php";
        })
    const selectClassicSingle = document.getElementById('selectStandardDouble');
    selectClassicSingle.addEventListener('click' , () => {
        let totalPrice = <?php echo $standardDouble->totalPrice ?>;
    })
    const selectClassicSingle = document.getElementById('selectClassicTwins');
        selectClassicSingle.addEventListener('click' , () => {
            let totalPrice = <?php echo $classicTwins->totalPrice ?>;
        })
    



    </script>

</body>
</html>