<!DOCTYPE html>
<html>
<head>
	<title>Update Category</title>
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
	<h2>Update Category</h2>
	<form method="POST" action="update_category.php">
		<label for="id">Category ID:</label>
		<input type="text" id="id" name="id"><br><br>
		<label for="name">New Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<input type="submit" value="Update Category">
	</form>
	<?php
		$conn = mysqli_connect("localhost", "root", "", "php-practicals");
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$id = $_POST["id"];
			$name = $_POST["name"];
			
			$sql = "UPDATE category_table SET name='$name' WHERE id='$id'";
			if (mysqli_query($conn, $sql)) {
				echo "Category updated successfully.";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			
			mysqli_close($conn);
		}
	?>
</body>
</html>
