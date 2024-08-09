<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <title>Hamrogadget</title>
    <style>
   /* styles.css */
/* styles.css */

body {
    font-family: Arial, sans-serif; /* Set a default font for the body */
    margin: 0;
    padding: 0;
    background-color: #f4f4f4; /* Light background color */
}

.products-container {
    display: flex;
    flex-wrap: wrap; /* Allows items to wrap onto the next line */
    gap: 20px; /* Space between items */
    justify-content: center; /* Centers items horizontally */
    padding: 20px; /* Add padding around the container */
}

.product-card {
    width: 300px; /* Fixed width for product cards */
    box-sizing: border-box; /* Include padding and border in the element's total width and height */
    border: 1px solid #ddd; /* Border around the product card */
    padding: 10px; /* Padding inside the product card */
    border-radius: 8px; /* Rounded corners */
    background-color: #fff; /* Background color */
    text-align: center; /* Center-align text inside the product card */
    overflow: hidden; /* Ensure content does not overflow */
}

.product-image-description {
    display: flex;
    flex-direction: column; /* Stack image and description vertically */
    align-items: center; /* Center items horizontally */
}

.product-card img {
    width: 100%; /* Make the image scale to the width of its container */
    height: auto; /* Maintain the aspect ratio of the image */
    border-bottom: 1px solid #ddd; /* Border below the image */
}

.product-description {
    padding: 10px; /* Add padding inside the description section */
}

.product-description h2 {
    margin: 10px 0; /* Margin around the product name */
}

.product-description p {
    margin: 5px 0; /* Margin around paragraphs */
}

.price {
    font-weight: bold; /* Bold text for the price */
    color: #e74c3c; /* Color for the price */
}

.add-to-cart-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #007bff; /* Button color */
    border: none;
    border-radius: 5px;
    text-decoration: none; /* Remove underline */
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.add-to-cart-button:hover {
    background-color: #0056b3; /* Darker shade for hover effect */
}

    </style>.
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
          <a href="addtocart.php" id="icn"
            ><i class="fa-solid fa-cart-shopping"></i
          ></a>
          <a href="index2.html" id="icn"><i class="fa-regular fa-user"></i></a>
          <a href="addtosell.html" id="sell">Add to sell</a>
        </div>
      </form>
    </div>
    <div class="container">
    <ul class="submenu">
        <li><a href="index.php">Home</a></li>
        <li><a href="viewsold.php">Buy 2nd Hand Product</a></li>
        <!-- <li><a href="#">Phones</a></li> -->
        <!-- <li><a href="#">ipad &tab</a></li> -->
        <!-- <li><a href="#">mac</a></li> -->
        <!-- <li><a href="#">wearable</a></li> -->
        <!-- <li><a href="#">headphone & speaker</a></li> -->
        <!-- <li><a href="#">camera</a></li> -->
        <!-- <li><a href="#">video games</a></li> -->
        <li><a href="#">offers</a></li>
        <li><a href="compare.html">Compare Product</a></li>
      </ul>
    </div>
    <div class="products-container">
    <?php include 'sold.php'; ?>
    </div>
    
    <footer>
      <div class="footer-content">
        <div class="footer-logo">
          <h1>Hamrogadget</h1>
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
        <p>&copy; 2024 Hamrogadget. All rights reserved.</p>
      </div>
    </footer>

  </body>
</html>
