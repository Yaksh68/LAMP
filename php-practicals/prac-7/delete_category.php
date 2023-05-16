<!DOCTYPE html>
<html>
<head>
	<title>Delete Category</title>
    <style>
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
      }

      li {
        float: left;
      }

      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      li a:hover {
        background-color: #111;
      }
    </style>
</head>
<body>
    <ul>
      <li><a href="prac-7.php">Home</a></li>
      <li><a href="add_category.php">Add Category</a></li>
      <li><a href="delete_category.php">Delete Category</a></li>
      <li><a href="update_category.php">Update Category</a></li>
      <li><a href="display_categories.php">Display Categories</a></li>
    </ul>
	<h2>Delete Category</h2>
	<form method="POST" action="delete_category.php">
		<label for="id">Category ID:</label>
		<input type="text" id="id" name="id"><br><br>
		<input type="submit" value="Delete Category">
	</form>
	<?php
        
		$conn = mysqli_connect("localhost", "root", "", "php-practicals");
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$id = $_POST["id"];
			
			$sql = "DELETE FROM category_table WHERE id='$id'";
			if (mysqli_query($conn, $sql)) {
				echo "Category deleted successfully.";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			
			mysqli_close($conn);
		}
	?>
</body>
</html>
