<?php
$host = "localhost";
$user = "root";
$password = "1234";
$dbname = "shopping_cart";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
