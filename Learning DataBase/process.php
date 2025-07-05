<?php
session_start();
require "connection.php";
// Check if the delete request is set
if (isset($_GET['delete'])) {
    $removeId = intval($_GET['delete']);
    // Prepare the delete statement
    $stmt = "DELETE FROM products WHERE id = '$removeId'";
    $result = $conn->query($stmt);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $productPrice = $_POST['productPrice'];
    $productExpiryDate = $_POST['productExpiryDate'];

    // Perform validation task
    $stmt = "INSERT INTO products (product_name, productPrice, productExpiryDate)";
    $stmt .= " VALUES ('$product_name', '$productPrice', '$productExpiryDate')";

    $result = $conn->query($stmt);

    if ($result) {
        $_SESSION['message'] = "items added successfully";
        header("location:index.php");
    } else {
        echo "Error";
    }
} else {
    $_SESSION['message'] = "No data submitted";
    header("location:index.php");
}
