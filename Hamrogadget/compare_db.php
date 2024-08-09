<?php
$host = 'localhost'; // or your database host
$db = 'your_database'; // replace with your database name
$user = 'your_username'; // replace with your database username
$pass = 'your_password'; // replace with your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
