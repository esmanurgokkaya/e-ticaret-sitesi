<?php
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['size'])) {
    $urun=  $_POST['urun'];
   $size = $_POST['size'];
   $quantity =  $_POST['quantity'];
   
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

    // Add the new product to the cart
    $product_details = array(
      "urun_id" => $urun,
      "size" => $size,
      "quantity" => $quantity
    );

    // Check if the product with the same ID and size already exists in the cart
    $found = false;
    foreach ($cart as &$item) {
      if ($item['urun_id'] == $urun && $item['size'] == $size) {
        $item['quantity'] += $quantity;
        $found = true;
        break;
      }
    }

    // If the product is not found in the cart, add it as a new item
    if (!$found) {
      $cart[] = $product_details;
    }

    // Save the updated cart back to the cookie
    setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: ../product.php?id='.$urun);
    
    }
    
 }