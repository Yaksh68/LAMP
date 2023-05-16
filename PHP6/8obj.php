 <!DOCTYPE html>
<html>
<body>
<?php
//prompt function
    function alertmsg($alt_msg){
        echo("<script type='text/javascript'> 
			alert('".$alt_msg."'); </script>");
    }
?>

Example Delete Operation (MySQLi Object Oriented):
<?php
$servername = "localhost";
$username = "ajay";
$password = "ajay";
$dbname = "lampt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$email=$_POST["email"];
$sql="";
if(!empty($email))
	$sql .= "DELETE FROM MyGuests WHERE email='$email'";
else
	$sql .= "DELETE FROM MyGuests WHERE email=''";
	//echo $sql;		
			
	if ($conn->query($sql) === TRUE) {
		$nrows=mysqli_affected_rows($conn);
		if($nrows>0){
			$alt_msg = "Records deleted successfully";
			$name = alertmsg($alt_msg);
			echo '<script type="text/javascript">';
			echo 'window.location.href = "8obj.html";';
			echo '</script>';
		//header("Location: http://localhost:8080/PHP6/8.html");
			exit;
		}
		else{	
			$alt_msg = "No rows deleted";
			$name = alertmsg($alt_msg);
			echo '<script type="text/javascript">';
			echo 'window.location.href = "8obj.html";';
			echo '</script>';
		
			exit;
		}
	} else {
		  echo "Error deleting record: " . $conn->error;
	}

$conn->close();
?>


</body>
</html>