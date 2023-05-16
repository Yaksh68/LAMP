<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="delete_category.php" method="POST">
    <label for="category_list">Select a category to delete:</label>
    <select id="category_list" name="category_id">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "php-practicals";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, name FROM categories";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<option value=\"" . $row["id"] . "\">" . $row["name"] . "</option>";
        }

        $conn->close();
        ?>
    </select>
    <input type="submit" value="Delete category">
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

$stmt = $conn->prepare("DELETE FROM categories WHERE id = ?");
$stmt->bind_param("i", $category_id);

$category_id = $_POST["category_id"];
$stmt->execute();

echo "Category deleted successfully";

$stmt->close();
$conn->close();
?>

</body>
</html>