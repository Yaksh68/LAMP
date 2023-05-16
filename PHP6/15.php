 <!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lampt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['insert'])){
$country=$_POST["country"];
$sql="CALL Insert_Country('$country');";
if (mysqli_query($conn, $sql)) {
		echo "Record inserted successfully. ";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
if(isset($_POST['delete'])){
$counid=$_POST["counid"];
$sql="CALL Delete_Country($counid);";
if (mysqli_query($conn, $sql)) {
	if(mysqli_affected_rows($conn)>0)
		echo "Record deleted successfully. ";
	else
			echo "No record deleted .... ";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
if(isset($_POST['update'])){
$counid=$_POST["ucounid"];
$country=$_POST["ucountry"];
$sql="CALL Update_Country($counid,'$country');";
if (mysqli_query($conn, $sql)) {
		if(mysqli_affected_rows($conn)>0)
			echo "Record updated successfully. ";
		else
			echo "No Record updated.... ";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
if(isset($_POST['display'])){
	$sql = "CALL Select_Country();";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<table border='1'>";
	echo "<tr> <th> Country ID </th> 
			   <th> Country Name</th> </tr>";	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row["cid"] . "</td>";
			echo "<td>" . $row["cname"] . "</td>";
			echo "</tr>";
		}
	} 
else {
		echo "0 results";
}
}	
mysqli_close($conn);
?>

</body>
</html>