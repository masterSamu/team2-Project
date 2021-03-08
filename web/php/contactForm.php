<!-- Header part -->
<?php

  $metaKeywords = "Hotel, Hämeenlinna";
  $metaDescription = "Hotel, Hämeenlinne, Contact Form";
  $title = "Hame Hotel - Contact Form";
  $customCssCode = '<link href="contactform.css" rel="stylesheet">';
  include 'header.php';
?>
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
<div class="row">
	<div class="col-md-12">
            <center><h3>Contact Us</h3></center>
	</div>
</div>
<div class="container">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  	    <p><label>Name:</label> <input type="text" name="name">
  	        <span class="error">* <?php echo $nameErr;?></span></p>
  	    <p><label>E-mail:</label> <input type="text" name="email">
  	        <span class="error">* <?php echo $emailErr;?></span></p>
  	    <p><label>Phone number: </label><input type="text" name="tel">
  	        <span class="error">* <?php echo $telErr;?></span></p>
  	    <p>
            <label>Comment: </label><textarea name="comment" rows="5" cols="40"></textarea>
        </p>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
	</form>
</div>
<div class=container>
    <center><a href="home.php">
        <button class="btn btn-primary">Back to homepage</button>
    </a></center>
</div>
<script>
<!-- Include footer from footer.php file -->
<?php include 'Footer.php'; ?>
