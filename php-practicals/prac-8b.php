<!DOCTYPE html>
<html>
<head>
	<title>Stack Operations</title>
</head>
<body>
	<h1>Stack Operations</h1>
	<form method="POST">
		<label for="stack_op">Select operation:</label>
		<select id="stack_op" name="stack_op">
			<option value="push" selected>Insert an element in stack</option>
			<option value="pop">Delete an element from stack</option>
			<option value="display">Display contents of stack</option>
		</select>
		<br><br>
		<label for="stack_val">Enter value (for push operation):</label>
		<input type="number" id="stack_val" name="stack_val">
		<br><br>
		<input type="submit" value="Submit">
	</form>

	<?php
		$stack = isset($_COOKIE["stack"]) ? unserialize($_COOKIE["stack"]) : array();


		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$op = $_POST["stack_op"];

			if ($op == "push") {
				$val = $_POST["stack_val"];
				array_push($stack, $val);
				echo "<p>Inserted element $val in stack.</p>";
			} elseif ($op == "pop") {
				if (count($stack) == 0) {
					echo "<p>Stack is empty, cannot delete an element.</p>";
				} else {
					$val = array_pop($stack);
					echo "<p>Deleted element $val from stack.</p>";
				}
			} elseif ($op == "display") {
				if (count($stack) == 0) {
					echo "<p>Stack is empty, nothing to display.</p>";
				} else {
					echo "<p>Contents of stack:</p>";
					echo "<ul>";
					foreach ($stack as $val) {
						echo "<li>$val</li>";
					}
					echo "</ul>";
				}
			}

			setcookie("stack", serialize($stack), time()+3600);
		}
	?>

</body>
</html>
