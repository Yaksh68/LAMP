 <!DOCTYPE html>
<html>
<body>

Example (PDO):
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=lampt", 
			$username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>

<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lampt";

    try{
        $db_name = "mysql:host=$servername;dbname=lampt";

        $con = new PDO($db_name,$username,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e){
        echo "Connection failed ".$e->getMessage();
    }

</body>
</html>