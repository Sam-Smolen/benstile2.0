<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
  <script src="assets/js/bootstrap.bundle.js"></script> 
<!--NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src=<?=$logo?> alt="logo image">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://benstilenmore.com/index.php">Home</a>
        </li>
        <div class="dropdown">
          <a class="btn btn-outline-secondary text-white dropdown-toggle" style="border: none; background: none; padding: 0.5rem; font-weight: 600;" href="https://benstilenmore.com/index.php#services" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
        
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="https://benstilenmore.com/index.php#services">Our services</a></li>
            <li><a class="dropdown-item" href="https://benstilenmore.com/learnmoretile.php">Tile design</a></li>
            <li><a class="dropdown-item" href="https://benstilenmore.com/learnmorebathroom.php">Custom bathroom design</a></li>
            <li><a class="dropdown-item" href="https://benstilenmore.com/learnmorekitchen.php">Custom kitchen design</a></li>
          </ul>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="https://benstilenmore.com/index.php#testimonials">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://benstilenmore.com/index.php#faq">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://benstilenmore.com/index.php#portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://benstilenmore.com/index.php#contact">Contact</a>
        </li>
      </ul>
      <button type="button" class="rounded-pill btn-rounded btn-sm">+1 2068492789
          <span>
              <i class="fas fa-phone-alt"></i>
          </span>
      </button>
    </div>
  </div>
</nav>