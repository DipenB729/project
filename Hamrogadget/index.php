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
    <br /><br />
    <div class="top_selling_product">
      <h1>Top Selling Product</h1>
      <div class="see_all">
        <i class="fa-solid fa-plus"></i>
        <h2>see all</h2>
      </div>
    </div>
    <div class="boxes">
      <div class="box1">
        <a href="#" id="addtocart"> <p>Add to Cart</p></a>
      </div>
    </div>
    
    <br /><br /><br />
    <br /><br />
    
  </div>
</div>
<br />
<br />
</div>

<?php include 'home.php'; ?>

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
        <p>&copy; 2024 GadgetByte. All rights reserved.</p>
      </div>
    </footer>

    <script src="java.js"></script>
  </body>
</html>
