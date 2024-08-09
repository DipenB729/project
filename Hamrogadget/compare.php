<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="Compare two products" />
    <link rel="stylesheet" href="compare.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <title>Product Comparison</title>
</head>
<body>
    <div class="navbar">
        <a href="index.php"><h1>Hamrogadget</h1></a>
        <form action="searchresults.html" class="form" method="GET">
            <input type="search" placeholder="Search" id="input" name="query" />
            <button type="submit" id="search">
                <i class="fa-solid fa-magnifying-glass"></i> Search
            </button>
            <div class="icon">
                <a href="addtocart.php" id="icn"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="index2.html" id="icn"><i class="fa-regular fa-user"></i></a>
                <a href="addtosell.html" id="sell">Add to sell</a>
            </div>
        </form>
    </div>

    <div class="container">
        <h1 class="text-center">Compare Two Products</h1>
        <div class="form-group">
            <label for="select1">Select Product 1:</label>
            <select id="select1" class="form-control" onchange="updateProduct('product1', this.value)">
                <option value="">Select Product</option>
            </select>
        </div>

        <div class="form-group">
            <label for="select2">Select Product 2:</label>
            <select id="select2" class="form-control" onchange="updateProduct('product2', this.value)">
                <option value="">Select Product</option>
            </select>
        </div>

        <table class="comparison-table">
            <thead>
                <tr>
                    <th>Feature</th>
                    <th>Product 1</th>
                    <th>Product 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Product Image</th>
                    <td id="img1"><img src="" alt="Product 1" /></td>
                    <td id="img2"><img src="" alt="Product 2" /></td>
                </tr>
                <tr>
                    <th>Product Price</th>
                    <td id="price1"></td>
                    <td id="price2"></td>
                </tr>
                <tr>
                    <th>Product Description</th>
                    <td id="desc1"></td>
                    <td id="desc2"></td>
                </tr>
                <tr>
                    <th>Product Brand</th>
                    <td id="brand1"></td>
                    <td id="brand2"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <h1>GadgetByte</h1>
            </div>
            <div class="footer-links">
                <a href="#">About Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="footer-socials">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Hamro gadget. All rights reserved.</p>
        </div>
    </footer>


    
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
$sql = "SELECT name, description, price, image FROM product_db";
$result = $conn->query($sql);

$name_list = array();


if ($result->num_rows > 0) {
    // Output data of each row
  

    while($row = $result->fetch_assoc()) {  
        echo "<div class='prod_out'>";
        echo "<div class='prod_in'>";
        echo "<img src='" . $row["image"] . "' width='300' height='300' />";
        echo "<h2>" . $row["name"] . "</h2>";
        $name_list[] = $row["name"];
        echo "<p>" . $row["description"] . "</p>";
        echo "<p>Price: Rs" . $row["price"] . "</p>";
        echo "<p><a href='add_to_cart.php?item_id={$row["name"]}' class='add-to-cart-button'>Add to Cart</a></p></a>";
        echo "</div>";
        echo "</div><BR>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>


</script>
<script src="compare.js"></script>


<form method="post" action="show_comparision_ajax_handler.php">
<select name="dropdown1">
    <?php foreach ($name_list as $name): ?>
        <option value="<?php echo htmlspecialchars($name); ?>">
            <?php echo htmlspecialchars($name); ?>
        </option>
    <?php endforeach; ?>
</select>
<br><br>
<select name="dropdown2" id="myDropdown">
    <?php foreach ($name_list as $name): ?>
        <option value="<?php echo htmlspecialchars($name); ?>">
            <?php echo htmlspecialchars($name); ?>
        </option>
    <?php endforeach; ?>
</select>

        <button type="submit" name="redirect">Compare</button>
    </form>

</body>
</html>
