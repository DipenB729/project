<!DOCTYPE html>
<html lang="en">
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
/* Style for the container holding all the product boxes */
.container1 {
    display: flex;
    flex-wrap: wrap; /* Allows items to wrap to the next line */
    gap: 20px; /* Adds space between the boxes */
    justify-content: center; /* Centers items horizontally within the container */
}

/* Style for each product box */
.prod_out {
    flex: 1 1 300px; /* Flex-grow, flex-shrink, and flex-basis */
    box-sizing: border-box;
}

/* Style for the content inside each product box */
.prod_in {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    text-align: center;
    background-color: #f9f9f9;
}

/* Style for images to fit inside the box */
.prod_in img {
     width: 100%; /* Make sure the image scales to the width of its container */
    height: auto; /* Set a fixed height for all images */
    object-fit: cover;
}
h2{
  font-size:20px
}
.add-to-cart-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #007bff; /* Bootstrap primary color */
    border: none;
    border-radius: 5px;
    text-decoration: none; /* Remove underline */
    text-align: center;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.add-to-cart-button:hover {
    background-color: #0056b3; /* Darker shade for hover effect */
}
.prod_in p {
    font-size: 16px; /* Adjust font size */
    line-height: 1.5; /* Increase line height for readability */
    color: #333; /* Dark grey color for text */
    margin-bottom: 10px; /* Space below each paragraph */
    text-align: center; /* Center-align text */
    padding: 0 10px; /* Add horizontal padding for better spacing */
}

.prod_in .price {
    font-weight: bold; /* Make the price stand out */
    color: #e74c3c; /* Color for the price */
    font-size: 18px; /* Slightly larger font size for price */
}

.prod_in .description {
    font-style: italic; /* Italicize the description text */
    color: #555; /* Slightly lighter color for description */
}


</style>
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
    <!-- <div class="image">
      <img src="topimage.jpeg" alt="" width="100px" />
    </div> -->
    <section class="content">
      <h1>New arrival of Product</h1>
      <p>Get your favorite gadget</p>
      <button><a href="#newarrival">shop now</a></button>
    </section>
    <hr />


<div class="container1" style=" display:flex; flex-wrap:wrap; justify-content:space-between; column-gap:20px;" >
  <?php include 'home.php'; ?>
</div>


    <div class="Payment_method">
      <h1>Payment Method</h1>
    </div>
    <div class="Payment_image">
      <img src="esewa.jpeg" alt="" />
      <img src="khalti.jpeg" alt="" />
      <img src="connectips.jpeg" alt="" />
      <img src="cashondelivery1.jpg   " alt="" />
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

    <script src="java.js"></script>
  </body>
</html>
