<?php
  session_start();
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'sneakerhub');
  $select_id = $_GET['id'];
  $sql = "SELECT * FROM products WHERE id = $select_id ";
  $category = $con->query($sql);

  /*
  if (isset($_POST['add_to_cart']))
  {
    if (isset($_SESSION['cart'])){
      $session_array_id = array_column($_SESSION['cart'], "id");
      
      if(!in_array($_GET['id'], $session_array_id))
      {
        
      $session_array = array(
        'id' => $_GET['id'], 
        'title' => $_POST['title'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity']
      );

      $_SESSION['cart'][] = $session_array; 

      }

    }else{
      $session_array = array(
        'id' => $_GET['id'], 
        'title' => $_POST['title'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity']
      );

      $_SESSION['cart'][] = $session_array; 
    }

  }

  /*

// details.php
session_start();
include 'db_connection.php';

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch();
}

if ($product): ?>
    <h1><?php echo $product['title']; ?></h1>
    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
    <p><?php echo $product['description']; ?></p>
    <p>Price: $<?php echo $product['price']; ?></p>
    <a href="cart.php?add=<?php echo $product['id']; ?>" class="btn btn-primary">Add to Cart</a>
<?php else: ?>
    <p>Product not found.</p>
<?php endif; ?>

*/

?>


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
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About</a>
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
<!--Selected Product-->


<!--
  <section class="product_section ">

  <?php
      //$product = mysqli_fetch_assoc($category);
  ?>
    <form>
    
      <h3 class="text-center"><?//= $product['title']; ?></h3>

      <div class="product_container">

        <div class="container">      

            
            <img src="<?//= $product['image'];?>" alt="<?//= $product['title']; ?>" height="380"/>     
            
            
            <div class="product_container">
            <div class="box">
                <div class="box-content">
                <form method="post" action="details.php?id=<?//=$products['id']?>"> 
                  <p class="lprice"><b>$</b><?//= $product['price'];?></p>
                    <p class="desc"><?//= $product['description'];?></p>
                    <p class="bname"><?//= $product['brandname'];?></p>
                    <input type="number" name="quantity" value="1" class="form-control">
                    <?php //echo $product['title']; ?> - $<?php //echo $product['price']; ?>
                    <input type="submit" value="Add To Cart" class="btn btn-success" value="<?php //$product['id']?>">              
                </div>
                </form>
            </div>
        </div>
      </div>
        </div>    
          </div>
        </div> 
      </div>
      
      
    </div>

  </section>
-->

<section class="product_section ">
<?php
      $product = mysqli_fetch_assoc($category);
  ?>
  
  
<div class="product_container">
<div class="container">
<div class="product_heading">
    <h2 class="text-center"><?= $product['title']; ?></h2>
  </div>
<div class="row">
  <div class="col-md-5"><img src="<?= $product['image'];?>" alt="<?= $product['title']; ?>" height="380"/></div>
  <div class="col-md-5" style="align-items: left;">
  <div class="box">
  <div class="box-content">
    <p class="lprice"><h3>$<?= $product['price'];?></h3></p>
    <p class="desc"><?= $product['description'];?></p>
    <p class="bname"><?= $product['brandname'];?></p>
    <button class="btn btn-success">Add To Cart</button>
  </div>
  </div>
  
    
    
  </div>
</div>

</div>
</div>

</section>

<!--End of Selected Product-->


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

