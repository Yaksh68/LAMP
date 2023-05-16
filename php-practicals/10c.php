<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="filename">Enter filename:</label>
    <input type="text" id="filename" name="filename">
    <br>
    <input type="submit" value="Submit">
    </form>
    <?php

        if (!isset($_GET['filename'])) {
        die('Error: Filename parameter not specified.');
        }

        $filename = $_GET['filename'];

        $file = fopen($filename, "r");

        echo "<table>";
        echo "<tr><th>Roll No.</th><th>Name</th><th>Physics</th><th>Chemistry</th><th>Mathematics</th><th>Percentage</th></tr>";

        while (($line = fgets($file)) !== false) {
        $data = explode("|", $line);

        $percentage = ($data[2] + $data[3] + $data[4]) / 3;

        echo "<tr>";
        echo "<td>" . $data[0] . "</td>";
        echo "<td>" . $data[1] . "</td>";
        echo "<td>" . $data[2] . "</td>";
        echo "<td>" . $data[3] . "</td>";
        echo "<td>" . $data[4] . "</td>";
        echo "<td>" . $percentage . "%</td>";
        echo "</tr>";
        }

        fclose($file);

        echo "</table>";
    ?>

 
</body>
</html>
