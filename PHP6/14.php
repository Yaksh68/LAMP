 <!DOCTYPE html>
<html>
<body>

<?php
echo "Example (MySQLi Object-oriented)";
$servername = "localhost";
$username = "ajay";
$password = "ajay";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DROP DATABASE mydb";

if ($conn->query($sql) === TRUE) {
    echo "DATABASE drop successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

echo "<br>Example (MySQLi Procedural)";
$servername = "localhost";
$username = "ajay";
$password = "ajay";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DROP DATABASE mydb1";

if (mysqli_query($conn, $sql)) {
    echo "DATABASE drop successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>