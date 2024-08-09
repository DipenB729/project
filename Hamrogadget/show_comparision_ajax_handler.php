<?php
// ajax_handler.php

    // Check if both dropdowns are set
    if (isset($_POST['dropdown1'])) {
        // Retrieve selected values
        $selectedDropdown1 = htmlspecialchars($_POST['dropdown1']);

        // Print the selected values
        echo "Selected value from dropdown1: " . $selectedDropdown1 . "<br>";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";
        
        // Create a new database connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // SQL query to fetch data from the sales table
        $sql = "SELECT name, description, price, image FROM product_db";
        $result = $conn->query($sql);
        
        $name_list = array();
        
        
        // Fetch and display data for the first dropdown selection
        while ($row = $result->fetch_assoc()) {
            if ($row["name"] == $selectedDropdown1) {
                echo "<div class='prod_out'>";
                echo "<div class='prod_in'>";
                echo "<img src='" . htmlspecialchars($row["image"]) . "' width='300' height='300' />";
                echo "<h2>" . htmlspecialchars($row["name"]) . "</h2>";
                echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
                echo "<p>Price: Rs" . htmlspecialchars($row["price"]) . "</p>";
                echo "<p><a href='add_to_cart.php?item_id=" . urlencode($row["name"]) . "' class='add-to-cart-button'>Add to Cart</a></p>";
                echo "</div>";
                echo "</div><br>";
                echo $selectedDropdown1;
            }
            $name_list[] = htmlspecialchars($row["name"]);
        }
        
        $conn->close();
        
        


    } else {
        echo "One or both dropdowns are not set.";
    }

?>

<?php
// ajax_handler.php

    // Check if both dropdowns are set
    if (isset($_POST['dropdown2'])) {
        // Retrieve selected values
        $selectedDropdown2 = htmlspecialchars($_POST['dropdown2']);

        // Print the selected values

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";
        
        // Create a new database connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // SQL query to fetch data from the sales table
        $sql = "SELECT name, description, price, image FROM product_db";
        $result = $conn->query($sql);
        
        // Fetch and display data for the first dropdown selection
        while ($row = $result->fetch_assoc()) {
            if ($row["name"] == $selectedDropdown2) {
                echo "<div class='prod_out'>";
                echo "<div class='prod_in'>";
                echo "<img src='" . htmlspecialchars($row["image"]) . "' width='300' height='300' />";
                echo "<h2>" . htmlspecialchars($row["name"]) . "</h2>";
                echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
                echo "<p>Price: Rs" . htmlspecialchars($row["price"]) . "</p>";
                echo "<p><a href='add_to_cart.php?item_id=" . urlencode($row["name"]) . "' class='add-to-cart-button'>Add to Cart</a></p>";
                echo "</div>";
                echo "</div><br>";
                echo $selectedDropdown2;
            }
        }
        
        $conn->close();
    } else {
        echo "One or both dropdowns are not set.";
    }

?>

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
