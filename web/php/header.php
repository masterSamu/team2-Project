
<!-- Navigation bar file for Hame Hotel website -->

<!doctype html>
<html lang="en">



    <head>

        <!--fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">    

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Hotel, Room, Restaurant, Hämeenlinna">
        <meta name="description" content="Hotel in Hämeenlinna">
        <meta name="author" content="team2">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!-- Custom CSS -->
        <link href="Default.css" rel="stylesheet">

        <title>Hame Hotel - Homepage</title>
    </head>

    <body>
        <div class="container-fluid">

             <!-- Navigation bar -->
             <div class="mynav">  <!-- Start of navbar-->        
                <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
                    <div class="container">
                      <a class="navbar-brand" href="home.php"><logo class="hame-logo"><img   src="images/Hame_Hotel_logo.png" alt="Hame hotel logo" height=80px width="auto"></logo></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="rooms_hossein.html">ROOMS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="restaurant.php">RESTAURANT</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="parking.php">PARKING</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="meeting_hossein.html">MEETINGS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="contact_hossein.html">CONTACT</a>
                          </li>
                        </ul>
                        <form class="d-flex">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav> 
                </div> <!-- end of navbar-->
