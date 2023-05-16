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
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fname=$lname=$email=$fname1=$lname1=$email1="";	

function displayUData(){
	global $fname,$lname,$email,$conn,$fname1,$lname1,$email1;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$fname=trim($_POST["firstname"]);
		//echo $fname;
		$email=$_POST["email"];
		if(!empty($fname)){
			$sql = "SELECT firstname,lastname,email FROM 
			   MyGuests where firstname='$fname'";
			//echo "$sql";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) == 1) {
				while($row = mysqli_fetch_assoc($result)) {
					$fname1=$row["firstname"]; 					
					$lname1 = $row["lastname"] ;
					$email1= $row["email"] ;		
					
				}
				return 1;
			}else if (mysqli_num_rows($result) > 1) {
				echo "<b><p>";
				echo "<br/>Multiple records found.";
				echo "<br/>Format of data:Firstname Lastname Email<br/>";
				
				while($row = mysqli_fetch_assoc($result)) {
					echo $row["firstname"] . "  ";
					echo $row["lastname"] . "   ";
					echo $row["email"] . "   ";
					echo "<br/>";
				}
				echo "</p></b>";
					return 2;
			}
			else {
				echo "0 results";
			}
			
		}
		
	}
}

function updatUData(){
	global $fname,$lname,$email,$conn;
	$fname=$_POST["firstname"];
	$lname=$_POST["lastname"];
	$email=$_POST["email"];
	$sql="";
	if(empty($fname) || empty($lname)) {
		echo "<b>Specify Last Name also</b><br>";
		}
	else if(!empty($fname) && !empty($lname)){
		$nrow=displayUData();
		if($nrow == 1){ 
		$sql .= "UPDATE MyGuests SET lastname='$lname',
		email='$email' WHERE firstname='$fname'";			
		//echo $sql;
		}
		if($nrow > 1){
		 if(!empty($email)){
			$sql .= "UPDATE MyGuests SET lastname='$lname'
				WHERE firstname='$fname' and email='$email'";			
		 }
		 else{
			 echo "Specify email...";
		 }
		}
		if (mysqli_query($conn, $sql)) {	
			$nrows=mysqli_affected_rows($conn);
			if($nrows>0){
				$alt_msg = "Records updated successfully";
				$name = alertmsg($alt_msg);
				echo '<script type="text/javascript">';
				echo 'window.location.href = "9.php";';
				echo '</script>';
				
			
				exit;
			}			
			else{	
				$alt_msg = "No rows updated";
				$name = alertmsg($alt_msg);
				echo '<script type="text/javascript">';
				echo 'window.location.href = "9.php";';
				echo '</script>';
				
				exit;
			}
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
		
	}
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["displaydata"])) {
		displayUData();
	}
	if(isset($_POST["submit"])) {
		updatUData();
	}

}
?>
<h1>Example Update Operation (MySQLi Procedural):</h1>
<h2 style="color:red"> Specify first name and email in case of multiple record found.</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Update operation: <br>
First Name: <input type="text" name="firstname" required  value="<?php echo $fname1; ?>">
<input type="submit" name="displaydata" value="Display Data"><br>
Last Name: <input type="text" name="lastname" value="<?php echo $lname1; ?>"><br>
Email ID: <input type="email" name="email"  value="<?php echo $email1; ?>"><br>
<input type="submit" name="submit">
</form>

<?php
mysqli_close($conn); 
?>
</body>
</html>