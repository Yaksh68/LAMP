 <!DOCTYPE html>
<html>
<body>

Example Insert Record (MySQLi Object Oriented):
<?php
$servername = "localhost";
$username = "ajay";
$password = "ajay";
$dbname = "lampt";

// Create connection
$conn = new mysqli($servername, $username, $password,
		$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) ){
		
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)" . 
			"VALUES ('". $_POST["firstname"] ."', '" . 
			$_POST["lastname"] .
			"','". $_POST["email"]  ."')";
			
	//echo $sql;		
			
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}		
$conn->close();
?>


</body>
</html>