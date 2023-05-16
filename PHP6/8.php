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

Example Delete Operation (MySQLi Procedural):
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

$email=$_POST["email"];
$sql="";
if(!empty($email))
	$sql .= "DELETE FROM MyGuests WHERE email='$email'";
else
	$sql .= "DELETE FROM MyGuests WHERE email=''";
	//echo $sql;		
			
	if (mysqli_query($conn, $sql)) {	
		$nrows=mysqli_affected_rows($conn);
		if($nrows>0){
			$alt_msg = "Records deleted successfully";
			$name = alertmsg($alt_msg);
			echo '<script type="text/javascript">';
			echo 'window.location.href = "8.html";';
			echo '</script>';
		//header("Location: http://localhost:8080/PHP6/8.html");
			exit;
		}
		else{	
			$alt_msg = "No rows deleted";
			$name = alertmsg($alt_msg);
			echo '<script type="text/javascript">';
			echo 'window.location.href = "8.html";';
			echo '</script>';
		
			exit;
		}
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
?>


</body>
</html>