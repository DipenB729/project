
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create a new database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the sales table
$sql = "SELECT name, description, price, image FROM sell_db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='product-card'>";
        echo "<div class='product-image-description'>";
        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "' />";
        echo "<div class='product-description'>";
        echo "<h2>" . $row["name"] . "</h2>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p class='price'>Price: Rs" . $row["price"] . "</p>";
        echo "<p><a href='add_to_cart.php?item_id={$row["name"]}' class='add-to-cart-button'>Add to Cart</a></p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
