 <!DOCTYPE html>
<html>
<body>

Example (MySQLi Procedural):
<?php
$servername = "localhost";
$username = "temp";
$password = "temp";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

</body>
</html>