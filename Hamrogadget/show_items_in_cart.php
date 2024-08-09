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
$sql = "SELECT product_name, source FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row["product_name"];
        echo "<p>" . $name . "</p>";
        echo "<p>" . $row["source"] . "</p>";

        $second_sql = "";
        
        $table_name = "sell_db";
        if($row["source"] == "first"){
            $table_name = "product_db";
        }else{
            $table_name = "sell_db";
        }
        $second_sql = "SELECT name, description, price, image FROM $table_name where name = '$name'";

        $second_result = $conn->query($second_sql);
        if (mysqli_num_rows($second_result) > 0) {
            while($row2 = mysqli_fetch_assoc($second_result)) {
                echo "<ul>";
                echo "<li>Name: " . $row2["name"] . "</li>";
                echo "<li>Description: " . $row2["description"] . "</li>";
                echo "<li>Price: " . $row2["price"] . "</li>";
                echo "<li><img width=180 height=180 src='" . $row2["image"] . "' alt='" . $row2["name"] . "' /></li>";
                echo "</ul>";
            }
        }
    }
} else {
    echo "0 results";
}

$conn->close();
?>
