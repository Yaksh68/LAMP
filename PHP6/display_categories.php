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

echo "<table>";
echo "<tr><th>ID</th><th>Name</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td></tr>";
}
echo "</table>";

$conn->close();
?>
