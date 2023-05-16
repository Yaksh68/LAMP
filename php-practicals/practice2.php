<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="select_op">Select operation</label>
    <select name="stack_op" id="select_op">
        <option value="push" selected>insert</option>
        <option value="pop" >pop</option>
        <option value="display" >display</option>
    </select>

    <?php
    $stack = isset($_COOKIE["stack"])?unserialize($_COOKIE["stack"]):array();
    $op = $_POST["stack_op"];
    setcookie("stack",serialize($stack),time()+3600);
?>

</body>
</html>