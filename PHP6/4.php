 <!DOCTYPE html>
<html>
<body>

Example Insert Operation (MySQLi Procedural):
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
/*
if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) ){
		
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)" . 
			"VALUES ('". $_POST["firstname"] ."', '" 
			. $_POST["lastname"] .
			"','". $_POST["email"]  ."')";
	//echo $sql;		
			
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}	
*/
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["email"];
if(!empty($fname) && !empty($lname) ){
		
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)" . 
			"VALUES ('$fname','$lname','$email')";
			
	//echo $sql;		
			
	if (mysqli_query($conn, $sql)) {		
		echo "New record created successfully. Last inserted ID is: " . $last_id;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
mysqli_close($conn);
?>


</body>
</html>