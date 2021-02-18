
<!-- Header part -->
<?php

  $metaKeywords = "Hotel, Hämeenlinna";
  $metaDescription = "Hotel, Hämeenlinne";
  $title = "Hame Hotel - Home";
  $customCssCode = '<link href="reservation-style.css" rel="stylesheet">';

  include 'header.php';
?>

    <div id="progressPlan" class="container2">
        <h2 id="describe-title">Step progress Bar</h2>
        <div id="stepProgressBar">
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

        <div id="main">
            
            <button id="previousBtn" disabled>Previous</button>
            <button id="finishBtn" disabled>Finish</button>
            <p><br></p>
            <h1 id="TittleOfReservation">Select Room</h1>

        </div>
    </div>
    <main>
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
                            <h2>Classic Single Room</h2>
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