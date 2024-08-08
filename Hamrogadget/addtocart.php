<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="addtocart.css" />
    <script
      src="https://kit.fontawesome.com/92d70a2fd8.js"
      crossorigin="anonymous"
    ></script>
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
          <div class="cart">
            <i class="fa-solid fa-cart-shopping"></i>
            <p id="count">0</p>
          </div>
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
    <?php include 'show_items_in_cart.php';?>
    
    <!-- <div class="header">
      <p class="logo">Hamrogadget</p>
      <div class="cart">
        <i class="fa-solid fa-cart-shopping"></i>
        <p id="count">0</p>
      </div>
    </div> -->
    <div class="container1">
      <div id="root"></div>
      <div class="sidebar">
        <div class="head"><p>My Cart</p></div>
        <div id="cartItem">Your cart is empty</div>
        <div class="foot">
          <h3>Total</h3>
          <h2 id="total">Rs 0.00</h2>
        </div>
      </div>
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
        <p>&copy; 2024 hamrogadget. All rights reserved.</p>
      </div>
    </footer>

    <script src="addtocart.js"></script>
  </body>
</html>
