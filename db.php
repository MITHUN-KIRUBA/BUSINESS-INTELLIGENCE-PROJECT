<?php
$host = "localhost";
$user = "root"; // Default for XAMPP
$password = ""; // Default for XAMPP
$database = "classroom_by_numbers"; // Your actual database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
