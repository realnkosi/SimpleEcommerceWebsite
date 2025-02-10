<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon/sneakerhub.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <b><title>SNEAKER ⚫ HUB</title></b>
    
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              <img src="images/fevicon/logo.png" width="200">
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.php"> About <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="all_products.php">All Products</a>
              </li>
            </ul>
            <div class="user_optio_box">
              <a href="cart.php">
                <img src="images/cart.png" alt="cart">
              </a>
              <a href="">
                <img src="images/userUser.png" alt="cart">
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
  <!-- end header section -->
  
  
  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
          <a href="index.php">
            <span>
              <img src="images/fevicon/logo.png" width="500">
            </span>
          </a>
      </div>
      <div class="row">

        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Shop
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location-white.png" width="18px" alt="">
              </div>
              <p>
                Harare Institute of Technology 
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +263 78 807 7462
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                samueldube123@gmail.com / h230585g@hit.ac.zw
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Tools Used
            </h5>
            <p>
              MYSQL, PHP, HTML, Bootstrap(CSS, SCSS, Javascript), 
              Adobe Illustrator(Logo Design), Pictures(pngwing.com and pexels.com)
              Poe.com(Product Description)
              
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_form ">
            <h5> My Socials</h5>
            <div class="social_box">
              <a href="https://www.facebook.com/profile.php?id=100012071889350">
                <img src="images/fb.png" alt="">
              </a>
              <a href="https://x.com/DubeMnqobi_Sam">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="https://www.linkedin.com/in/mnqobisamueldube">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
          </div>
        </div>
          
        </div>          


      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Mnqobi Samuel Dube H230585G 
        <a href="https://hit.ac.zw">HIT</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
        
</body>
</html>


