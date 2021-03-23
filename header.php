<!doctype html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" href="./Images/logo.png" type="image/x-icon">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    
    <!-- Personal  CSS -->
    <link rel="stylesheet" href="./Styles/styles.css">
    <link rel="stylesheet" href="./Styles/hover.css">

    <!--  Title Of the site  -->
    <title>Shopify-Home</title>

    <?php

      // Requring all the functions from fuctions.php file.
      require('functions.php');
    ?>
  </head>
  <body>

  <!--  Navbar or Header Section -->
  <nav class="navbar">
    <div class="container-fluid">
      <a href="#" class="nav-link">
        <h3>Shopify</h3>
        <!-- <img src="./Images/logo.png" alt="Logo"> -->
      </a>
      <ul class="nav justify-content-end m-auto">
      <li class="nav-item hvr-underline-reveal">
        <a class="nav-link active" aria-current="page" href="#top-sale">
          <i class="fas fa-dollar-sign"></i> On Sale
        </a>
      </li>
      <li class="nav-item hvr-underline-reveal">
        <a class="nav-link" href="#special-price">
          <i class="fa fa-list-alt"></i> Category <i class="fas fa-chevron-down"></i>
        </a>
      </li>
      <li class="nav-item  hvr-underline-reveal">
        <a class="nav-link" href="#">
          <i class="fab fa-product-hunt"></i> Products
        </a>
      </li>
      <li class="nav-item  hvr-underline-reveal">
        <a href="#" class="nav-link">
          <i class="far fa-clock"></i> Comming Soon
        </a>
      </li>
      <li class="nav-item  hvr-underline-reveal">
        <a href="#latest-blogs" class="nav-link">
          <i class="fas fa-blog"></i> Blogs
        </a>
      </li>
      <li class="nav-item  hvr-underline-reveal">
        <a href="#" class="nav-link">
          <i class="far fa-heart"></i> Wishlist
        </a>
      </li>
    </ul>
    <form action="#">
      <button class="btn login">Sign In</button>
      <a href="#" class="py-2 rounded-pill color-primary-dark-bg">
        <span class="px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
      </a>
    </form>
    </div>
  </nav>

  <!-- Main Section -->
  <main id="main">