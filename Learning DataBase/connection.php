<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed try again later" . $conn->connect_error);
}

