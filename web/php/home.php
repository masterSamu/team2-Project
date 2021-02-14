<!doctype html>
<html lang="en">

  <head>

      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Hotel, Room, Restaurant, Hämeenlinna">
      <meta name="description" content="Hotel in Hämeenlinna">
      <meta name="author" content="team2">

      <!-- Styling files -->
      <?php include 'styling-links.php'; ?>


      <title>Hame Hotel - Homepage</title>

  </head>


<!-- Include navigation bar from navbar.php file -->
<?php include 'navbar.php'; ?>


<!-- Home Page content -->

<!-- Top Image Carousel -->
<div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/Hame_Hotel.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/hame_hotel_view.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/Hame_Hotel_Conference.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </a>
                      </div>
                </div>
            </div>


            <!-- Header -->
            <div class="row">
                <div class="col-md-12">
                    <h1>Hame Hotel</h1>
                </div>
            </div>

            <!-- Page Content-->
            <main>
                <div class="content">
                    <div class="row">
                        <!-- Left side article 1 -->
                        <div class="col-md-6">
                            <article>
                                <h2>A vantage point to see the city and the world.</h2>
                                <p>
                                  Hame Hotel Hämeenlinna offers an all-new-hotel experience. The hotel is located in the heart of Hämeenlinna next to the HAMK campus. Opened in the autumn of 2015, the hotel pays homage to the eventful history and various legends of the city of Hämeenlinna. The modern hotel combined with the old locomotive depots provide the best possible environment to experience the enticing story of Hämeenlinna and its phenomena, from local rock icons to sports heroes. The hotel’s congress centre offers a unique setting for successful events and meetings.<br> The hotel’s restaurant and first-class breakfast provide delicious experiences for hotel guests and citizens of Hämeenlinna. Bar of the hotel have already become popular meeting place over Hämeenlinna and the world.
                                </p>
                                <a href="rooms.php" class="btn btn-primary">Book Room >></a>
                            </article>
                        </div>
                        <!-- Right side image 1 -->
                        <div class="col-md-6">
                            <aside>
                                <img src="images/city.jpg" class="img-fluid" alt="Hämeenlinna Hame Hotel view" width="1350" height="900">
                            </aside>   
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="row">
                        <!-- Left side article 2 -->
                        <div class="col-md-6">
                            <article>
                                <h2>Winter offer!</h2>
                                  <ul>
                                    <li>Overnight stay in a Deluxe Double Room for Two</li>
                                    <li>Full breakfest</li>
                                    <li>Full course Dnner in Restaurant</li>
                                    <li>Afternoon tea</li>
                                  </ul>
                                <p>
                                    <b>All from only 199€ per couple</b>
                                </p>
                                <a href="restaurant.php" class="btn btn-primary">Read more >></a>
                            </article>
                        </div>
                        <!-- Right side image 2 -->
                        <div class="col-md-6">
                            <aside>
                                <img src="images/dinner.jpg" class="img-fluid" alt="dinner in Hame Hotel" width="1350" height="900">
                            </aside>
                        </div>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="hero-image" id="homepage-hero-image">
                            <div class="hero-text">
                                <a href="giftcard_form_samu.html" class="btn btn-primary"><h3>Subscribe newsletter</h3></a>
                            </div>
                        </div>
                    </div>
                </div>




<!-- Include footer from footer.php file -->
<?php include 'Footer.php'; ?>
