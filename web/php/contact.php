<!-- Header part -->
<?php

  $metaKeywords = "Hotel, Hämeenlinna";
  $metaDescription = "Hotel, Hämeenlinna, Contact";
  $title = "Hame Hotel - Contact";

  include 'header.php';
?>

<!-- Page content -->

<main>
        <div class="row">
          <div class="col-md-12">
            <h1>Contact Us</h1>
          </div>
        </div>
        
        <div class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="google-map">    
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7738.572745552029!2d24.461369546238256!3d60.99440286687074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468e5d974ba92149%3A0xd9134b0bf285ebf!2sMatin%20ja%20Maijan%20Majatalo!5e0!3m2!1sen!2sfi!4v1610820703490!5m2!1sen!2sfi" width="95%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>

            <div class="col-md-6">
              <article>
                <h2>Contact Information</h2>
                <ul style="list-style-type: none;">
                  <address>
                    <li>Vuorikatu 19</li>
                    <li>00100 Helsinki, Finland</li>
                  </address>
                  <li>+358 10 23 456</li>
                  <li>reception@hamehotel.fi</li>
                </ul>  
              </article>
              <button class="btn btn-outline-success" type="submit"><a class="nav-link active" aria-current="page" href="contactForm.php">FILL IN CONTACT FORM HERE!</a></button>
            </div>
          </div>
        </div>


        </div>
        


    </main>


<!-- Footer from footer.php file -->
<?php include 'footer.php'; ?>

