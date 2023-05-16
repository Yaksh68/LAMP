<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="add_category.php" method="POST">
    <label for="category_name">Category name:</label>
    <input type="text" id="category_name" name="category_name">
    <input type="submit" value="Add category">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php-practicals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
$stmt->bind_param("s", $category_name);

$category_name = $_POST["category_name"];
$stmt->execute();

echo "New category added successfully";

$stmt->close();
$conn->close();
?>

</body>
</html>