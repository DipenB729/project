<!DOCTYPE html>
<html>
  <head>
    <style>
      .product {
        border: 1px solid #ccc;
        padding: 16px;
        margin: 16px;
        text-align: center;
      }
      .product h2 {
        font-size: 1.5em;
      }
      .product img {
        max-width: 100%;
        height: auto;
      }
      .content {
  background-image: url(./new.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  padding: 0 5%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  color: black;
  height: 90vh;
}

.content h1 {
  font-size: 40px;
}
.content p {
  font-size: 20px;
  margin-top: 20px;
}

.content button {
  margin-top: 30px;
  padding: 15px 30px;
  border: none;
  background-color: black;
  color: white;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  text-align: center;
  margin-top: 20px;
  /* margin-left: 100px; */
  font-family: sans-serif;
}

.navbar {
  display: inline-flex;
  padding: 10px;
  column-gap: 200px;
}
.navbar h1 {
  color: rgb(218, 33, 33);
  font-family: Georgia, "Times New Roman", Times, serif;
  font-size: 28px;
  margin-top: 10px;
  cursor: pointer;
}
.navbar a {
  text-decoration: none;
}
.form {
  display: inline-flex;
}
#input {
  border-radius: 5px;
  width: 400px;
  height: 50px;
  padding-left: 30px;
  border: 1px solid rgb(21, 21, 46);
}
#search {
  margin-left: -15px;
  color: white;
  background: rgb(21, 21, 46);
  border-radius: 5px;
  width: 150px;
  text-align: center;
  border: none;
  cursor: pointer;
}
.icon {
  display: inline-flex;
  column-gap: 10px;
  padding-left: 10px;
}
.navbar .icon #icn {
  background: rgb(154, 223, 26);
  width: 50px;
  text-align: center;
  padding-top: 15px;
  border-radius: 10px;
}
#sell {
  background: rgb(126, 89, 103);
  width: 90px;
  text-align: center;
  padding-top: 15px;
  border-radius: 10px;
  color: white;
  font-weight: 600;
  text-decoration: none;
}
.container {
  /* position: absolute; */
  background-color: rgb(124, 107, 107);
  height: 60px;
  width: 100%;
  text-align: center;
  margin-top: 10px;
}
.container ul {
  display: inline-flex;
  /* margin-left: 100px; */
  /* margin-right: 100px; */
  column-gap: 30px;
  list-style: none;
  margin-top: 20px;
}
.container ul li a {
  color: white;
  text-decoration: none;
  font-size: 14px;
  text-transform: uppercase;
}
.submenu {
  list-style: none; /* Remove default list styling */
  padding: 0;
  margin: 0;
}

.submenu li {
  margin: 0;
}

.submenu a {
  position: relative; /* Positioning context for the pseudo-element */
  text-decoration: none; /* Remove default underline */
  color: #333; /* Text color */
  font-size: 16px; /* Adjust font size */
  padding: 5px 0; /* Vertical padding for spacing */
  display: inline-block; /* Make links inline-block to fit the underline */
}
.submenu a::after {
  content: ""; /* Create an empty pseudo-element */
  position: absolute; /* Position it absolutely within the link */
  left: 0;
  bottom: 0; /* Position it at the bottom of the link */
  width: 100%; /* Full width of the link */
  height: 2px; /* Thickness of the underline */
  background-color: #007bff; /* Color of the underline */
  transform: scaleX(0); /* Initially hide the underline */
  transform-origin: bottom right; /* Animate from the right */
  transition: transform 0.3s ease; /* Smooth transition for the animation */
}

.submenu a:hover::after {
  transform: scaleX(1); /* Show the underline on hover */
  transform-origin: bottom left; /* Animate from the left on hover */
}

.image img {
  margin-top: 0px;
  /* height: 60vh; */
  width: 210vh;
  background-repeat: no-repeat;
}
.today_offer {
  text-align: center;
  margin-top: 50px;
  display: inline-flex;
  column-gap: 149vh;
}
.see_all {
  display: inline-flex;
  column-gap: 10px;
}
.today_offer h1 {
  font-size: 23px;
  font-weight: 600;
  font-family: sans-serif;
}
.today_offer .see_all i {
  background: rgb(247, 192, 201);
  width: 50px;
  height: 40px;
  text-align: center;
  padding-top: 10px;
  border-radius: 4px;
}

.today_offer .see_all h2 {
  font-size: 16px;
  padding-top: 10px;
  font-weight: 550;
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}

.boxes {
  margin-top: 20px;
  text-align: center;
  display: inline-flex;
  column-gap: 20px;
}

.box1 {
  font-size: 8px;
  font-family: sans-serif;
  font-weight: 700;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  border-style: none;
  height: 310px;
  width: 220px;
}
.box1 p {
  font-size: 15px;
  margin-top: 10px;
  margin-bottom: 10px;
  font-family: sans-serif;
  font-weight: 600;
  color: rgb(8, 8, 8);
}
#addtocart p {
  background-color: rgba(228, 76, 16, 0.151);
  height: 40px;
  width: 130px;
  text-align: center;
  margin-left: 48px;
  padding-top: 12px;
  font-style: italic;
}
#addtocart {
  text-decoration: none;
}
.top_selling_product {
  text-align: center;
  margin-top: 50px;
  display: inline-flex;
  column-gap: 134vh;
}
.see_all {
  display: inline-flex;
  column-gap: 10px;
}
.top_selling_product h1 {
  font-size: 23px;
  font-weight: 600;
  font-family: sans-serif;
}
.top_selling_product .see_all i {
  background: rgb(247, 192, 201);
  width: 50px;
  height: 40px;
  text-align: center;
  padding-top: 10px;
  border-radius: 4px;
}

.top_selling_product .see_all h2 {
  font-size: 16px;
  padding-top: 10px;
  font-weight: 550;
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
.two_container {
  height: 45vh;
  width: 91vh;
  background-color: yellow;
  border: 1px solid black;
  border-radius: 3px;
  margin-left: 83px;
  margin-top: 30px;
  border-style: none;
  display: flex;
  column-gap: 17px;
}
.cont1 img {
  height: 45vh;
  width: 91vh;
}
.cont1 h1 {
  font-size: 20px;
  margin-top: -40vh;
  margin-left: 100px;
}
.cont1 {
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
#see {
  padding-top: 220px;
  padding-left: 280px;
  color: red;
}
#see:hover {
  color: rgb(214, 51, 11);
  cursor: pointer;
}
.new_arrival {
  text-align: center;
  margin-top: 50px;
  display: inline-flex;
  column-gap: 149vh;
}
.see_all {
  display: inline-flex;
  column-gap: 9px;
}
.new_arrival h1 {
  font-size: 23px;
  font-weight: 600;
  font-family: sans-serif;
}
.new_arrival .see_all i {
  background: rgb(247, 192, 201);
  width: 50px;
  height: 40px;
  text-align: center;
  padding-top: 10px;
  border-radius: 4px;
}

.new_arrival .see_all h2 {
  font-size: 16px;
  padding-top: 10px;
  font-weight: 550;
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
.fire {
  height: 24.8vh;
  width: 35vh;
  border: 1px solid;
  border-style: none;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 5px 15px;
  margin-left: 13vh;
  display: flex;
  column-gap: 5px;
}
.new_arrival_right {
  margin-top: 20px;
}
.fire img {
  height: 100px;
  width: 120px;
  margin-left: 5px;
  margin-top: 18px;
}
.fire h1 {
  font-size: 20px;
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  font-weight: 200;
}
.fire .pricetag {
  margin-top: 25px;
}
.fire .pricetag p {
  font-size: 15px;
  font-weight: 700;
  margin-top: 10px;
  color: red;
}
.bigcontainer {
  display: flex;
  column-gap: 18px;
}
.second_line {
  display: flex;
  margin-top: -5px;
}
.best_deal {
  margin-top: 20px;
  margin-left: 13vh;
  display: flex;
  column-gap: 141.5vh;
}
.best_deal .see_all i {
  background: rgb(247, 192, 201);
  width: 50px;
  height: 40px;
  text-align: center;
  padding-top: 10px;
  border-radius: 4px;
}
.Payment_method h1 {
  font-size: 30px;
  font-weight: 700;
  margin-top: 30px;
}
.Payment_image img {
  height: 100px;
  width: 100px;
}
.Payment_image {
  display: flex;
  column-gap: 40vh;
  margin-top: 20px;
  margin-left: 100px;
}
/* General Footer Styling */
footer {
  background-color: #333;
  color: white;
  padding: 20px 0;
  text-align: center;
  position: relative;
  margin-top: 20px;
}

.footer-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 15px;
}

.footer-logo h1 {
  margin: 0;
  font-size: 24px;
  font-family: "Arial", sans-serif;
}

.footer-links {
  margin: 10px 0;
}

.footer-links a {
  color: #f1f1f1;
  text-decoration: none;
  margin: 0 10px;
  font-size: 14px;
}

.footer-links a:hover {
  text-decoration: underline;
}

.footer-socials {
  margin: 10px 0;
}

.footer-socials a {
  color: #f1f1f1;
  margin: 0 10px;
  font-size: 20px;
  text-decoration: none;
}

.footer-socials a:hover {
  color: #ddd;
}

.footer-bottom {
  margin-top: 20px;
  font-size: 12px;
}

.footer-bottom p {
  margin: 0;
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
        <li><a href="#">Phones</a></li>
        <li><a href="#">ipad &tab</a></li>
        <li><a href="#">mac</a></li>
        <li><a href="#">wearable</a></li>
        <li><a href="#">headphone & speaker</a></li>
        <li><a href="#">camera</a></li>
        <li><a href="#">video games</a></li>
        <li><a href="#">offers</a></li>
        <li><a href="compare.html">Compare Product</a></li>
      </ul>
    </div>
    <?php include 'sold.php'; ?>
    
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
