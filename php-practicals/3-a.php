<html>
<body>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<h2> Enter Paragraph : </h2>
	<textarea name="para" cols="50" rows="10"></textarea>
	<br><br>

	<h2> Enter word : </h2>
	<input type="text" name="word">

		<div style = "position:relative; top:10px">
		<input type="submit">
      </div>
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$para = $_POST['para'];
		$word = $_POST['word'];

		// Words
		$separator = '.';
		$sentences = explode($separator, $para);
		$count=0;
		foreach ($sentences as $sentence) {
    		$count++;		}

		echo "Total no of sentences : ".$count-1;
		echo "<br>";
		echo "<br>";

		// Count words
		echo "Total number words in paragraph is : ";
		echo str_word_count($para);
		echo "<br>";
		echo "<br>";

		$count_char = count_chars($para,1);
		echo "Total number of characters in the entire paragraph : ".array_sum($count_char) - $count_char[32];

		echo "<br>";
		echo "<br>";
		echo "Occurrence of each character in the paragraph : ";
		echo "<br>";
		foreach ($count_char as $x => $val) {
            if ($x == 32) {
                echo "";
            } else {
                echo chr($x) . " occurs " . $val . " times " . "<br>";
            }
        }
		echo "<br>";
		echo $para;
		echo "<br>";

		if (strrpos($para,$word,0) == '' ) {
            echo "Word not found";
		} else {
            echo "Word found at ".(strpos($para, $word)) + 1;
        }
		
}		
	?>
</body>
</html>
