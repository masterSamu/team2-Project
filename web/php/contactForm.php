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
$nameErr = $emailErr = $telErr = "";
$name = $email = $comment = $tel = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["tel"])) {
    $telErr = "Phone number is required";
  } else {
    $website = test_input($_POST["tel"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<main>
<div class="row">
	<div class="col-md-12">
            <center><h1>Contact Us</h1></center>
	</div>
</div>
<div class="container">
	<form method="post" action="contact-Info.php">
        <div class="col-md">
  	        <label for="name">Name:</label> <input type="text" id="name" required></p>
        </div>
        <div class="col-md">
  	        <label for="email">Email:</label> <input type="text" id="email" required></p>
        </div>
        <div class="col-md">
  	        <label for="tele">Phone number:</label> <input type="tel" id="tele" required></p>
        </div>
        <div class="col-md">
            <label for="">Messages:</label> <textarea id="mes" required></textarea>
        </p>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
	</form>
</div>
</main>
<!-- Include footer from footer.php file -->
<?php include 'Footer.php'; ?>
