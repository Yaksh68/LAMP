<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php-practicals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the UPDATE statement
$stmt = $conn->prepare("UPDATE categories SET name = ? WHERE id = ?");
$stmt->bind_param("si", $category_name, $category_id);

// Set parameters and execute
$category_name = $_POST["category_name"];
$category_id = $_POST["category_id"];
$stmt->execute();

echo "Category updated successfully";

$stmt->close();
$conn->close();
?>