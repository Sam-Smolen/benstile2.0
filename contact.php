<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ben's Tile 2.0</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<!--NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/nav-logo.png" alt="logo image">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://samsmolen.com/benstile2.0/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonials">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <button type="button" class="rounded-pill btn-rounded">+1 2068492789
            <span>
                <i class="fas fa-phone-alt"></i>
            </span>
        </button>
      </div>
    </div>
  </nav>
  <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "sam.smolen@icloud.com";  //place your/your client's email address here
        $toName = "Sam Smolen"; //place your client's name here
        $website = "IT162 Portal - Sam Smolen";  //place NAME of your client's website

        echo loadContact('simple.php', 'feedback_custom.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
<!-- START FOOTER SECTION -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <!--MOBILE CONTENT-->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            <path d="M15 7a2 2 0 0 1 2 2" />
            <path d="M15 3a6 6 0 0 1 6 6" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="" class="contact-box__info--title">+12068492789</a>
          <p class="contact-box__info--subtitle">Mon-Fri 9am-5pm</p>
        </div>
      </div>
      <!--EMAIL CONTENT-->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <polyline points="3 9 12 15 21 9 12 3 3 9" />
            <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
            <line x1="3" y1="19" x2="9" y2="13" />
            <line x1="15" y1="13" x2="21" y2="19" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="" class="contact-box__info--title">benrich11@gmail.com</a>
          <p class="contact-box__info--subtitle">Questions?</p>
        </div>
      </div>
      <!--LOCATION CONTENT-->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="18" y1="6" x2="18" y2="6.01" />
            <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
            <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
            <line x1="9" y1="4" x2="9" y2="17" />
            <line x1="15" y1="15" x2="15" y2="20" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="" class="contact-box__info--title">Washington, USA</a>
          <p class="contact-box__info--subtitle">WA 98201, US</p>
        </div>
      </div>
    </div>
  </div>
<!--START SOCIAL MEDIA CONTENT-->
<div class="footer-sm pb-1 pt-1" style="background-color:#002820;">
<div class="container">
  <div class="row py-4 text-center text-white">
    <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
      <h5>Connect with us on social media!</h5>
    </div>
    <div class="col-lg-7 col-md-6">
      <a href=""><i class="fab fa-facebook"></i></a>
      <a href=""><i class="fab fa-instagram"></i></a>
      <a href=""><i class="fab fa-yelp"></i></a>
    </div>
  </div>
</div>
</div>
<!--FOOTER BOTTOM-->
<div class="footer-bottom pt-2 pb-2">
<div class="container">
  <div class="row text-center text-white">
  <div class="col-12">
    <div class="footer-bottom__copyright">
      &COPY; Copyright 2022 - By Sam Smolen <a id="html-checker" href="#top" target="_blank">Check HTML</a> ~
      <a id="css-checker" href="#" target="_blank">Check CSS</a>
    </div>
  </div>
</div>
</div>
</div>
</footer>
<!-- END FOOTER SECTION -->

  <script src="assets/js/bootstrap.bundle.js"></script> 
</body>
</html>