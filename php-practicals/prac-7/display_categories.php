<!DOCTYPE html>
<html>
<head>
	<title>Display Categories</title>
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
	<h2>Categories</h2>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
		</tr>
		<?php
            $conn = mysqli_connect("localhost", "root", "", "php-practicals");
			
			$sql = "SELECT * FROM category_table";
			$result = mysqli_query($conn, $sql);
			
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td></tr>";
			}
			
			mysqli_close($conn);
		?>
	</table>
</body>
</html>
