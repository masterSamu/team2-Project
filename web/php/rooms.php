<!doctype html>
<html lang="en">

    <head>  

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Hotel, Room, Restaurant, Hämeenlinna">
        <meta name="description" content="Hotel restaurant in Hämeenlinna">
        <meta name="author" content="Samu Uunonen">

        <!-- Styling files -->
        <?php include 'styling-links.php'; ?>
        

        <title>Hame Hotel - Rooms</title>
    </head>
    <body>
        <!-- Include navigation bar from navbar.php file -->
        <?php include 'navbar.php'; ?>

        <main>      <!-- Page content -->
            <div class="container-fluid">
                <div>
                    <p><br></p>
                </div>
                <div class="row">
                    <div class="col-md-7">
                            <img src="images/hame-hotel-rooms.jpg" class="img-fluid" alt="double bed room Photo" height=200px>
                    </div>
                    <div class="col-md-5">
                        <h1>Rooms</h1>
                        <p>Different rooms different experience, Enjoy the variety of Hame hotel rooms.</p>

                    </div>
                </div>            
                <p class="menu-describtion">Stay safely at Hame Hotel »</p>
                <div class="flex-property-usage"><!----------using flexbox--------------->
            
              
                <div class="card h-100 mx-1 my-1" style="width: 20rem;">
                  <img src="images/01 - classic single room - hame hotel.GIF" class="card-img-top" alt="Classic Single room image" height=200px>
                  <div class="card-body">
                    <h5 class="card-title">1 persons - 11m2</h5>
                    <p><br></p>
                    <h4 class="card-text">Classic Single</h4>
                    <p>Small single room suitable for one person</p>
                    <div class="accordion">
                      <button type="button" class="accordion__button">Read more</button>
                      <div id="collapse-classicsingle" class="accordian__content">
                        <p><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sed temporibus molestiae, consequatur deserunt molestias nostrum itaque harum 
                          sapiente voluptatum nisi eveniet. Facere, quibusdam eius fugit asperiores quidem pariatur! Et?</p>
                      </div>
                    </div> 
                  </div>
                </div>
              
              
                <div class="card h-100 mx-1 my-1" style="width: 20rem;">
                  <img src="images/02 - standard twins - hame hotel.GIF" class="card-img-top" alt="Standard twins room with two seprated bed" height=200px>
                  <div class="card-body">
                    <h5 class="card-title">2 persons - 14m2</h5>
                    <p><br></p>
                    <h4 class="card-text">Standard Twins</h4>
                    <p>Standard twins room with two seprated bed</p>
                    <div class="accordion">
                      <button type="button" class="accordion__button">Read more</button>
                      <div id="collapse-classicsingle" class="accordian__content">
                        <p><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sed temporibus molestiae, consequatur deserunt molestias nostrum itaque harum 
                          sapiente voluptatum nisi eveniet. Facere, quibusdam eius fugit asperiores quidem pariatur! Et?</p>
                      </div>
                    </div> 
                  </div>
                </div>
              
              
                <div class="card h-100 mx-1 my-1" style="width: 20rem;">
                  <img src="images/03 - standard double - hame hotel.GIF" class="card-img-top" alt="Standard double room for one or two person" height=200px>
                  <div class="card-body">
                    <h5 class="card-title">2 persons - 14m2</h5>
                    <p><br></p>
                    <h4 class="card-text">Standard double</h4>
                    <p>Standard double room for one or two person</p>
                    <div class="accordion">
                      <button type="button" class="accordion__button">Read more</button>
                      <div id="collapse-classicsingle" class="accordian__content">
                        <p><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sed temporibus molestiae, consequatur deserunt molestias nostrum itaque harum 
                          sapiente voluptatum nisi eveniet. Facere, quibusdam eius fugit asperiores quidem pariatur! Et?</p>
                      </div>
                    </div> 
                  </div>
                </div>

                </div><!------------ end of using flexbox------------->
            
                <h2 id="describe-title">Stay in the center of Hameenlinna <br>
                Hame Hotel’s cozy rooms at an excellent value for money
                </h2>
                <div class="describe">
                <p><b>Rich hotel breakfast, always friendly service and central location, here are a few reasons to book a room at our hotel
                </b></p>
                <p>The private Hame Hotel is located in central Hameenlinna, only 200 meters from Central Station. We have a selection of 24 rooms of different sizes and décor, ranging from the Sir Arthur Suite with sauna to a budget room for the budget traveler. Stay in standard rooms at a low price, for a small extra charge you can get a stylish Comfort level room. Also remember our magnificent, double-bed Jugend rooms.</p>
                </div>
            </div>
        </main>
        
         <!-- Include footer from footer.php file -->
        <?php include 'Footer.php'; ?>
        <script>
            /* js code - for collapse */
                document.querySelectorAll('.accordion__button').forEach(button=>{
                button.addEventListener('click' , () =>{
                    const accordianContent = button.nextElementSibling;

                    button.classList.toggle('accordion__button--active');

                    if(button.classList.contains('accordion__button--active')) {
                    accordianContent.style.maxHeight = accordianContent.scrollHeight +'px';
                    } else {
                    accordianContent.style.maxHeight = 0 ;
                    }
                });                  
                });
                /* end of js code  - for collapse */
        </script>
         
    </body>


    
    




