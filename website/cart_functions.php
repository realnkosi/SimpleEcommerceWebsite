<?php
session_start(); // Ensure session is started

include 'db_connection.php';

// Now you can use $con to run queries
$sql = "SELECT * FROM products WHERE category=2";
$category = $con->query($sql);
$product = mysqli_fetch_assoc($category);


// Function to add a product to the cart
function addToCart($productId, $quantity = 1) {
    // Check if the session variable for the cart exists
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Connect to the database
    include 'db_connection.php'; // Your database connection file

    // Fetch product details from the database
    $stmt = $con->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $productId); // Bind product ID as an integer
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    if ($product) {
        // If the product is already in the cart, increase the quantity
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity'] += $quantity;
        } else {
            // Otherwise, add the product to the cart
            $_SESSION['cart'][$productId] = [
                'title' => $product['title'],
                'price' => $product['price'],
                'quantity' => $quantity,
                'image' => $product['image'],
            ];
        }
    }
}

// Function to display the contents of the cart
function displayCart() {
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        $total = 0;
        echo "<h2>Your Cart</h2><ul>";
        foreach ($_SESSION['cart'] as $id => $item) {
            $subtotal = $item['price'] * $item['quantity'];
            $total += $subtotal;
            echo "<li>
                    <img src='{$item['image']}' alt='{$item['title']}' style='width:50px; height:50px;'> 
                    {$item['title']} - \${$item['price']} x {$item['quantity']} = \$$subtotal
                    <a href='remove.php?id=$id'>Remove</a>
                  </li>";
        }
        echo "</ul>";
        echo "<h3>Total: \$$total</h3>";
        echo "<a href='checkout.php' class='btn btn-success'>Checkout</a>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
}