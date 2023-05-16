<!DOCTYPE html>
<html>
<head>
	<title>Validation Form</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<label for="mobile_number">Mobile Number:</label>
		<input type="text" id="mobile_number" name="mobile_number"><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>

		<input type="submit" value="Submit">
	</form>
    <?php

if (isset($_POST['mobile_number'])) {
    $mobile_number = $_POST['mobile_number'];
    if (preg_match('/^[6-9]\d{9}$/', $mobile_number)) {
        echo "Valid mobile number<br>";
    } else {
        echo "Invalid mobile number<br>";
    }
}


if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', $password)) {
        echo "Valid password";
    } else {
        echo "Invalid password";    
    }
}
?>

</body>
</html>
