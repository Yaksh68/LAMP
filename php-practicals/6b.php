<!DOCTYPE html>
<html>
<body>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
First Name: <input type="text" name="firstname" required><br>
Last Name: <input type="text" name="lastname" required><br>
Email ID: <input type="email" name="email"><br>
<input type="submit">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php-practicals";

$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) ){
		
	$sql = "INSERT INTO guests (firstname, lastname, email)" . 
			"VALUES ('". $_POST["firstname"] ."', '" . $_POST["lastname"] .
			"','". $_POST["email"]  ."')";
			
	// echo $sql;		
			
	if (mysqli_query($conn, $sql)) {
		$last_id = mysqli_insert_id($conn);
		echo "<br> New record created successfully. Last inserted ID is: " . $last_id;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}	

mysqli_close($conn);

?>

</body>
</html>