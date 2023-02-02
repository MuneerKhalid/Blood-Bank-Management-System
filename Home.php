<?php
session_start();
$userprofile = $_SESSION['user_name'];

if($userprofile == true){

}else{
    header('location:Login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Home.css" />
    <script src="./Registration.js"></script>
    <script src="./Blood_Request.js"></script>
    <script src="./Display.js"></script>
    <title>Document</title>
  </head>
  <body>
    <main class="hero-section">
      <section class="container">
        <div class="hero-content">
          <nav class="navbar">
            <h1 class="nav-logo">MK</h1>
            <ul class="nav-links">
              <li>Inventory</li>
              <li><a href="#About"> About Us</a></li>
              <li>Explore</li>
              <li><button ><a href="./Logout.php">Log Out</a></button></li>
            </ul>
          </nav>
        </div>
      </section>
    </main>
  

    <div class="flip-portion" id="About">
      <div class="flip-card-container" style="--hue: 220">
        <div class="flip-card">
          <div class="card-front">
            <figure>
              <div class="img-bg"></div>
              <img
                src="https://images.unsplash.com/photo-1486162928267-e6274cb3106f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                alt="Brohm Lake"
              />
              <figcaption>Blood Donation</figcaption>
            </figure>

            <ul class="flip-card-detail">
              <li>Blood is the most precious gift that anyone can give to another person ~The gift of life.</li>
            </ul>
          </div>

          <div class="card-back">
            <figure>
              <div class="img-bg"></div>
              <img
                src="https://images.unsplash.com/photo-1486162928267-e6274cb3106f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                alt="Brohm Lake"
              />
            </figure>

            <button onclick="register()">Donate</button>

            <div class="design-container">
              <span class="design design--1"></span>
              <span class="design design--2"></span>
              <span class="design design--3"></span>
              <span class="design design--4"></span>
              <span class="design design--5"></span>
              <span class="design design--6"></span>
              <span class="design design--7"></span>
              <span class="design design--8"></span>
            </div>
          </div>
        </div>
      </div>
      <!-- /flip-card-container -->

      <!-- flip-card-container -->
      <div class="flip-card-container" style="--hue: 170">
        <div class="flip-card">
          <div class="card-front">
            <figure>
              <div class="img-bg"></div>
              <img
                src="https://images.unsplash.com/photo-1545436864-cd9bdd1ddebc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                alt="Image 2"
              />
              <figcaption>Need Blood?</figcaption>
            </figure>

            <ul class="flip-card-detail">
              <li>Blood is the most precious gift that anyone can give to another person ~The gift of life.</li>
            </ul>
          </div>

          <div class="card-back">
            <figure>
              <div class="img-bg"></div>
              <img
                src="https://images.unsplash.com/photo-1545436864-cd9bdd1ddebc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                alt="image-2"
              />
            </figure>

            <button onclick="request()">Request</button>

            <div class="design-container">
              <span class="design design--1"></span>
              <span class="design design--2"></span>
              <span class="design design--3"></span>
              <span class="design design--4"></span>
              <span class="design design--5"></span>
              <span class="design design--6"></span>
              <span class="design design--7"></span>
              <span class="design design--8"></span>
            </div>
          </div>
        </div>
      </div>
      <!-- /flip-card-container -->

      <!-- flip-card-container -->
      <div class="flip-card-container" style="--hue: 350">
        <div class="flip-card">
          <div class="card-front">
            <figure>
              <div class="img-bg"></div>
              <img
                src="https://images.unsplash.com/photo-1486162928267-e6274cb3106f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                alt="Brohm Lake"
              />
              <figcaption>Records</figcaption>
            </figure>

            <ul class="flip-card-detail">
              <li>Blood is the most precious gift that anyone can give to another person ~The gift of life.</li>
            </ul>
          </div>

          <div class="card-back">
            <!-- only if the image is necessary -->
            <figure>
              <div class="img-bg"></div>
              <img
                src="https://images.unsplash.com/photo-1486162928267-e6274cb3106f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                alt="Brohm Lake"
              />
            </figure>

            <button onclick="vieww()">View</button>

            <!-- can add svg here and remove these eight spans -->
            <div class="design-container">
              <span class="design design--1"></span>
              <span class="design design--2"></span>
              <span class="design design--3"></span>
              <span class="design design--4"></span>
              <span class="design design--5"></span>
              <span class="design design--6"></span>
              <span class="design design--7"></span>
              <span class="design design--8"></span>
            </div>
          </div>
        </div>
      </div>
      <!-- /flip-card-container -->

      <a
        href="https://abubakersaeed.netlify.app/designs/d4-flip-card"
        class="abs-site-link"
        rel="nofollow noreferrer"
        target="_blank"
        >abs/designs/d4-flip-card</a
      >
    </div>  
  </body>
</html>

