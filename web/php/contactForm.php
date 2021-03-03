<!-- Header part -->
<?php

  $metaKeywords = "Hotel, Hämeenlinna";
  $metaDescription = "Hotel, Hämeenlinne, Contact Form";
  $title = "Hame Hotel - Contact Form";
  $customCssCode = '<link href="contactform.css" rel="stylesheet">';
  include 'header.php';
?>

<!-- Page Content-->

<main>
	<div class="row">
          <div class="col-md-12">
            <h1>Contact Form</h1>
          </div>
        </div>

<!-- Contact information form for room reservation -->
	<div class="container">
	<form  id="res-page-cus-info-table" method="POST" action="save-customer-info.php">
        <fieldset>
            <legend align="center">Customer information</legend>
            <table>
                <tr>
                    <td><label for="fname">First name:</label></td>
                    <td><input type="text" id="fname" name="fname" required></td>
                </tr>
                <tr>
                    <td><label for="lname">Last name:</label></td>
                    <td><input type="text" id="lname" name="lname" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" if="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="tel">Phone number:</label></td>
                    <td><input type="tel" id="tel" name="tel" required></td>
                </tr>
                <tr>
                    <td><label for="bdate">Birth date:</label></td>
                    <td><input type="date" id="bdate" name="bdate" value="" min="1900-01-01" max="2021-01-01" required></td>
                </tr>
		<!-- <tr>
                    <td><label for="mes">Messages:</label></td>
                    <td><input type="text" id="mes" name="mes"></td>
                </tr> --!>
	    </table>
            <input type="submit" class="btn btn-primary" value="Submit">
        </fieldset>
    </form>
        </div>
        </main>

<!-- Include footer from footer.php file -->
<?php include 'Footer.php'; ?>
