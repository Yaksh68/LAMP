<html>

<body>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		<h2> Enter String : </h2>
		<textarea name="string" cols="100" rows="3"></textarea>

		<div style="position:relative; top:10px">
			<input type="submit">
		</div>
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$str1 = $_POST['string'];

		if (strlen($str1) > 80) {
			echo "length is greater than 80";
		} else if (strlen($str1) < 80 && $str1[-1] != ".") {
			echo "no fullstop";
		} else {
			$str1 = substr($str1, 0, (strlen($str1) - 1));
			$arr = (explode(" ", $str1));
			$f = count($arr);
			for ($i = 0; $i < $f; $i++) {

				$ar[$arr[$i]] = strlen($arr[$i]);
			}

			unset($ar[""]);
			ksort($ar);

			arsort($ar);
			$sar = array();
			foreach ($ar as $key => $val) {
				array_push($sar, ucfirst($key));
			}

			echo implode(" ", $sar);
			echo ".";
		}
	}
	?>
</body>

</html>