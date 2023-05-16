 <!DOCTYPE html>
<html>
<body>

Example Multiple Insert Operation (MySQLi Procedural):
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

$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["email"];
$fname1=$_POST["firstname1"];
$lname1=$_POST["lastname1"];
$email1=$_POST["email1"];
$sql="";
if(!empty($fname) && !empty($lname) ){
		
	$sql .= "INSERT INTO MyGuests (firstname, lastname, email)" . 
			"VALUES ('$fname','$lname','$email');";
}
if(!empty($fname1) && !empty($lname1) ){
	$sql .= "INSERT INTO MyGuests (firstname, lastname, email)" . 
			"VALUES ('$fname1','$lname1','$email1');";	
}
	//echo $sql;		
			
	if (mysqli_multi_query($conn, $sql)) {		
		echo "New records created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
?>


</body>
</html>