<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email validation</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

Email ID: <input type="email" name="email"><br>
<input type="submit">
    <?php
       $email="";
       $email=$_POST["email"];
        if(preg_match('/^[^0-9._@][^@]*@[^@]+(\.[^@]+){1,2}$/',$email)) {
            // Valid email
            echo "Email is valid";
          } else {
            // Invalid email
            echo "Email is invalid";
          }
    ?>
</body>
</html>