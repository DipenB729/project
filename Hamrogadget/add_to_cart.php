<?php
session_start();

// Check if item_id is set in the URL query string
if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
    
    // Initialize the cart if not already done
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add the item to the cart
    if (!in_array($item_id, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $item_id;
        echo "Item with ID $item_id added to cart.";
    } else {
        echo "Item with ID $item_id is already in the cart.";
    }

    $connect = mysqli_connect("localhost","root","","project") or die("connection failed!");
    $insert = mysqli_query($connect,"INSERT INTO cart(product_name) VALUES('$item_id')");
    header('Location: addtocart.php');


} else {
    echo "No item ID provided.";
}
?>
