<!DOCTYPE html>
<html>
<head>
	<title>Vehicle Service Request Form</title>
</head>
<body>
	<h1>Vehicle Service Request Form</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br>

		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone"><br>

		<label for="make">Make:</label>
		<input type="text" id="make" name="make"><br>

		<label for="model">Model:</label>
		<input type="text" id="model" name="model"><br>

		<label for="year">Year:</label>
		<input type="text" id="year" name="year"><br>

		<label for="mileage">Mileage:</label>
		<input type="number" id="mileage" name="mileage"><br>

		<label for="service">Service Needed:</label>
		<textarea id="service" name="service"></textarea><br>

		<input type="submit" value="Submit">
	</form>

	<?php
		
		$nameErr = $emailErr = $phoneErr = $makeErr = $modelErr = $yearErr = $mileageErr = $serviceErr = "";
		$name = $email = $phone = $make = $model = $year = $mileage = $service = "";

		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameErr = "Name is required";
			} else {
				$name = test_input($_POST["name"]);
				
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and white space allowed";
				}
			}

			if (empty($_POST["email"])) {
				$emailErr = "Email is required";
			} else {
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Invalid email format";
				}
			}

			if (empty($_POST["phone"])) {
				$phoneErr = "Phone is required";
			} else {
				$phone = test_input($_POST["phone"]);
				if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$phone)) {
					$phoneErr = "Invalid phone number format";
				}
			}

			if (empty($_POST["make"])) {
				$makeErr = "Make is required";
			} else {
				$make = test_input($_POST["make"]);
			}

			if (empty($_POST["model"])) {
				$modelErr = "Model is required";
			} else {
				$model = test_input($_POST["model"]);
			}

			if (empty($_POST["year"])) {
				$yearErr ="Year is required";
			} else {
				$year = test_input($_POST["year"]);
				if (!is_numeric($year)) {
					$yearErr = "Year must be a number";
				}
			}

			if (empty($_POST["mileage"])) {
				$mileageErr = "Mileage is required";
			} else {
				$mileage = test_input($_POST["mileage"]);
				if (!is_numeric($mileage)) {
					$mileageErr = "Mileage must be a number";
				}
			}

			if (empty($_POST["service"])) {
				$serviceErr = "Service is required";
			} else {
				$service = test_input($_POST["service"]);
			}
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (!empty($nameErr)) {
				echo "<p><strong>Error:</strong> $nameErr</p>";
			}
			if (!empty($emailErr)) {
				echo "<p><strong>Error:</strong> $emailErr</p>";
			}
			if (!empty($phoneErr)) {
				echo "<p><strong>Error:</strong> $phoneErr</p>";
			}
			if (!empty($makeErr)) {
				echo "<p><strong>Error:</strong> $makeErr</p>";
				}
			if (!empty($modelErr)) {
				echo "<p><strong>Error:</strong> $modelErr</p>";
			}
			if (!empty($yearErr)) {
				echo "<p><strong>Error:</strong> $yearErr</p>";
			}
			if (!empty($mileageErr)) {
				echo "<p><strong>Error:</strong> $mileageErr</p>";
			}
			if (!empty($serviceErr)) {
				echo "<p><strong>Error:</strong> $serviceErr</p>";
			}
		}
	?>

</body>
</html>
