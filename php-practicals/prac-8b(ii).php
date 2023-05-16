<!DOCTYPE html>
<html>
<head>
	<title>Queue Operations</title>
</head>
<body>
	<h1>Queue Operations</h1>
	<form method="POST">
		<label for="queue_op">Select operation:</label>
		<select id="queue_op" name="queue_op">
			<option value="enqueue">Insert an element in queue</option>
			<option value="dequeue">Delete an element from queue</option>
			<option value="display">Display contents of queue</option>
		</select>
		<br><br>
		<label for="queue_val">Enter value (for enqueue operation):</label>
		<input type="number" id="queue_val" name="queue_val">
		<br><br>
		<input type="submit" value="Submit">
	</form>

	<?php
		$queue = isset($_COOKIE["queue"]) ? unserialize($_COOKIE["queue"]) : array();

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$op = $_POST["queue_op"];

			if ($op == "enqueue") {
				$val = $_POST["queue_val"];
				array_push($queue, $val);
				echo "<p>Inserted element $val in queue.</p>";
			} elseif ($op == "dequeue") {
				if (count($queue) == 0) {
					echo "<p>Queue is empty, cannot delete an element.</p>";
				} else {
					$val = array_shift($queue);
					echo "<p>Deleted element $val from queue.</p>";
				}
			} elseif ($op == "display") {
				if (count($queue) == 0) {
					echo "<p>Queue is empty, nothing to display.</p>";
				} else {
					echo "<p>Contents of queue:</p>";
					echo "<ul>";
					foreach ($queue as $val) {
						echo "<li>$val</li>";
					}
					echo "</ul>";
				}
			}

			setcookie("queue", serialize($queue), time()+3600);
		}
	?>

</body>
</html>
