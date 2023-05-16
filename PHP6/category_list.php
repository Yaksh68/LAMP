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

// Retrieve the selected category data from the database
$category_id = $_POST["category_id"];
$sql = "SELECT name FROM categories WHERE name =  $category_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Display a new form to update the category name
echo "<form action=\"update.php\" method=\"POST\">";
echo "<input type=\"hidden\" name=\"category_id\" value=\"" . $category_id . "\">";
echo "<label for=\"category_name\">Category name:</label>";
echo "<input type=\"text\" id=\"category_name\" name=\"category_name\" value=\"" . $row["name"] . "\">";
echo "<input type=\"submit\" value=\"Save\">";
echo "</form>";

$conn->close();
?>