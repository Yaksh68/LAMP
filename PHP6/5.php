 <!DOCTYPE html>
<html>
<body>

Example  Get ID of Last Inserted Record (MySQLi Procedural):
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

if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) ){
		
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)" . 
			"VALUES ('". $_POST["firstname"] ."', '" . $_POST["lastname"] .
			"','". $_POST["email"]  ."')";
			
	//echo $sql;		
			
	if (mysqli_query($conn, $sql)) {
		$last_id = mysqli_insert_id($conn);
		echo "New record created successfully. Last inserted ID is: " . $last_id;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}	

mysqli_close($conn);
?>


</body>
</html>