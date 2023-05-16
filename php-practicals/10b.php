<!DOCTYPE html>
<html>
<head>
	<title>Get File Info</title>
</head>
<body>
	<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="path">Enter file or directory path:</label>
		<input type="text" id="path" name="path">
		<br>
		<input type="submit" value="Get Info">
	</form>
    <?php

        if (!isset($_GET['path'])) {
        die('Error: Path parameter not specified.');
        }

        $path = $_GET['path'];

        if (!file_exists($path)) {
        die('Error: File or directory not found.');
        }

        $file_info = new SplFileInfo($path);

        echo "Name: " . $file_info->getFilename() . "<br>";

        if ($file_info->isDir()) {
        echo "Type: Directory<br>";
        } else {
        echo "Type: " . $file_info->getExtension() . " file<br>";
        }

        echo "Size: " . $file_info->getSize() . " bytes<br>";

        echo "Last modified: " . date("F d Y H:i:s.", $file_info->getMTime()) . "<br>";
    ?>

</body>
</html>
