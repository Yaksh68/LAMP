 <!DOCTYPE html>
<html>
<style>
	th { background-color:lightgrey; }
	tr:nth-child(even) {background: #FF0000;}

</style>
<body>

Select Data (MySQLi Procedural):
<?php
$servername = "localhost";
$username = "ajay";
$password = "ajay";
$dbname = "lampt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<table border='1'>";
	echo "<tr> <th> ID </th><th> First name </th>
		<th> Last name</th> </tr>";	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
		echo "<td>" . $row["firstname"] . "</td>";
		echo "<td>" . $row["lastname"] . "</td>";
		echo "</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>