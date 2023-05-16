 <!DOCTYPE html>
<html>
<body>

<?php
echo "Example (MySQLi Object-oriented)";
$servername = "localhost";
$username = "ajay";
$password = "ajay";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to alter table
$sql = "ALTER TABLE MyGuests MODIFY 
firstname VARCHAR(50) NOT NULL";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests altered successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// sql to alter table
$sql = "ALTER TABLE MyGuests ADD temp_col VARCHAR(50)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests altered successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// sql to alter table
$sql = "ALTER TABLE MyGuests drop column temp_col";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests altered successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();

echo "<br>Example (MySQLi Procedural)";
$servername = "localhost";
$username = "ajay";
$password = "ajay";
$dbname = "myDB1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to alter table
$sql = "ALTER TABLE MyGuests MODIFY 
firstname VARCHAR(50) NOT NULL";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests altered successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to alter table
$sql = "ALTER TABLE MyGuests ADD 
temp_col VARCHAR(50)";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests altered successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to alter table
$sql = "ALTER TABLE MyGuests drop column temp_col";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests altered successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);

?>

</body>
</html>