<?php
    $connect = mysqli_connect("localhost","root","","project") or die("connection failed!");
    $name= $_POST['name'];
    $description= $_POST['description'];
    $price= $_POST['price'];
    // $image= $_POST['image'];
    $image = "";
    
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // Get the image name
        $image = $_FILES['image']['name'];
    }
    $insert = mysqli_query($connect,"INSERT INTO sell_db(name,description,price,image) VALUES('$name','$description','$price','$image')");
    header('Location: ../index.php');
    exit;
    
    // echo"successful";    
?>
