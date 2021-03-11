<!-- Header part -->
<?php

  $metaKeywords = "Hotel, Hämeenlinna";
  $metaDescription = "Hotel, Hämeenlinne, Contact Form";
  $title = "Hame Hotel - Contact Form";
  $customCssCode = '<link href="contactform.css" rel="stylesheet">';
  include 'header.php';
?>
<head>
    <link href="reservation-style.css" type="text/css" rel="stylesheet" href="css/datepicker.css">
    <link href="reservation-style.css" type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
</head>
<!-- Page Content-->
<body>  

<?php
// define variables and set to empty values
?>
<main>
<div class="row">
	<div class="col-md-12">
            <center><h1>Contact Us</h1></center>
	</div>
</div>
<div class="container">
<div class="form">
    <center><h3>Contact Form</h3></center>
	<form method="POST" action="contact-Info.php">
        <div class="col-md">
  	        <label for="name">Name:</label> <input type="text" id="name" name="name" required></p>
        </div>
        <div class="col-md">
  	        <label for="email">Email:</label> <input type="text" id="email" name="email" required></p>
        </div>
        <div class="col-md">
  	        <label for="tele">Phone number:</label> <input type="tel" id="tele" name="tele" required></p>
        </div>
        <div class="col-md">
            <label for="mes">Messages:</label> <textarea id="mes" name="mes" required></textarea>
        </p>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
	</form>
</div>
</div>

<div class="row2">
    <div class="google-map">    
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7738.572745552029!2d24.461369546238256!3d60.99440286687074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468e5d974ba92149%3A0xd9134b0bf285ebf!2sMatin%20ja%20Maijan%20Majatalo!5e0!3m2!1sen!2sfi!4v1610820703490!5m2!1sen!2sfi" width="95%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
</main>

<script>
    const name = document.getElementById('name')
    const email = document.getElementById('email')
    const tele = document.getElementById('tele')
    const mes = document.getElementById('mes')
</script>
<!-- Include footer from footer.php file -->
<?php include 'Footer.php'; ?>
