<!DOCTYPE html>
<html>
  <head>
    <title>Main Page</title>
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
      <li><a href="#">Home</a></li>
      <li><a href="add_category.php">Add Category</a></li>
      <li><a href="delete_category.php">Delete Category</a></li>
      <li><a href="update_category.php">Update Category</a></li>
      <li><a href="display_categories.php">Display Categories</a></li>
    </ul>

    <h1>Welcome to the Main Page!</h1>
    <p>This is the main page of our website.</p>
  </body>
</html>
