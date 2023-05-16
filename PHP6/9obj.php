 <!DOCTYPE html>
<html>
<body>
<?php
//prompt function
    function alertmsg($alt_msg){
        echo("<script type='text/javascript'> alert('".$alt_msg."'); </script>");
    }
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

if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && 
		!empty($_POST["email"])){
	$fname=	$_POST["firstname"];
	$lname=$_POST["lastname"];
	$email=$_POST["email"];
	$sql = "update MyGuests set lastname='$lname',email='$email' 
			where firstname='$fname'";
			
	//echo $sql;		
			
	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}		
$conn->close();

?>

</body>
</html>