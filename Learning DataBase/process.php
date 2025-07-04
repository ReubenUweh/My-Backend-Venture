<?php

require "connection.php";

$product_name = $_POST['product_name'];
$productPrice = $_POST['productPrice'];
$productExpiryDate = $_POST['productExpiryDate'];

// Perform validation task
$stmt = "INSERT INTO products (product_name, productPrice, productExpiryDate)";
$stmt .= " VALUES ('$product_name', '$productPrice', '$productExpiryDate')";

$result = $conn->query($stmt);

if ($result) {
    header("location:index.php");
} else {
    echo "Error";
}
