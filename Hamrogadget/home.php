
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

if ($result->num_rows > 0) {
    // Output data of each row
    /*
    <div class="boxes">
      <div class="box1">
        <a href="#" id="addtocart"> <p>Add to Cart</p></a>
      </div>
    </div>
*/
echo "<style>
.prod_in{
 font-size: 8px;
 font-weight: 700;
 box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
 border-style: none;
 height: 310px;
 width: 220px;
 font-family: sans-serif;
 }git remote -v
 p{
   font-size: 10px;
   margin-top: 10px;
   margin-bottom: 10px;
   font-family: sans-serif;
   font-weight: 600;
   color: rgb(8, 8, 8);
   }
#addtocart p{
    width: 130px;
    text-align: center;
    margin-left: 48px;
    padding-top: 12px;
    font-style: italic;
    height: 40px;
    background-color: rgba(228, 76, 16, 0.151);
}
   

</style>";

    while($row = $result->fetch_assoc()) {
        echo "<div class='prod_out'>";
        echo "<div class='prod_in'>";
        echo "<img src='" . $row["image"] . "' width='300' height='300' />";
        echo "<h2>" . $row["name"] . "</h2>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p>Price: Rs" . $row["price"] . "</p>";
        $item_type = "first";
        echo "<p><a href='add_to_cart.php?item_id={$row["name"]}&item_type={$item_type}'>Add to Cart</a></p></a>";
        echo "</div>";
        echo "</div><BR>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
