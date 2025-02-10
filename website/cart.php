<?php

// products.php
session_start();
//include 'cart_functions.php';
//include 'cart.php'; // Include cart functions
//include 'products.php'; // Include product data
  // In another PHP file (e.g., all_products.php)
include 'db_connection.php';

// Now you can use $con to run queries
$sql = "SELECT * FROM products WHERE category=2";
$category = $con->query($sql);
$product = mysqli_fetch_assoc($category);

/*
  while($product = mysqli_fetch_assoc($category)):
    $products = ['name' => $product['title'], 'price' => $product['price']];

  endwhile;

*/

while($product = mysqli_fetch_assoc($category)):
  $products = [
    1=> ['name' => $product['title'], 'price' => $product['price']],
    //2 => ['name' => $product['title'], 'price' => $product['price']],
    //3 => ['name' => $product['title'], 'price' => $product['price']],
];
endwhile;

  function addToCart($productId) {
    global $products; // Access the products array

    if (isset($products[$productId])) {
        // Initialize the cart if it doesn't exist
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // If the product is already in the cart, increase the quantity
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity']++;
        } else {
            // Otherwise, add the product with quantity 1
            $_SESSION['cart'][$productId] = [
                'name' => $products[$productId]['name'],
                'price' => $products[$productId]['price'],
                'quantity' => 1,
            ];
        }
    }
}

// Check if an item is being added to the cart
if (isset($_GET['add'])) {
    $productId = (int)$_GET['add'];
    addToCart($productId);
}
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
                <a class="nav-link" href="index.php">Home</a>
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
                <img src="images/cart.png" alt="cart"><span class="sr-only">(current)</span>
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

<!--Bod-->

<section class="product_section ">
<div class="container">

<div class="product_heading">
        <h2>
          Your Cart
        </h2>
</div>

<?php

function displayCart() {
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo "<h2></h2><ul>";
        foreach ($_SESSION['cart'] as $item) {
            echo "<table><tr>{$item['name']} - \${$item['price']} x {$item['quantity']}</li></tr></table>";
        }
        echo "</ul>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
}

// cart.php
//include 'cart.php'; // Include cart functions
?>

    <?php displayCart(); ?>

    <a href="all_products.php">
        <input type="submit" name="add_to_cart" value="Continue shopping" class="btn btn-success">
    </a>
    <a href="">
        <input type="submit" name="add_to_cart" value="Check Out" class="btn btn-success">
    </a>
    
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $id => $product): ?>
            <li>
                <?php echo $product['name']; ?> - $<?php echo $product['price']; ?>
                <a href="?add=<?php echo $id; ?>">Add to Cart</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</section>

<!--End of Bod-->