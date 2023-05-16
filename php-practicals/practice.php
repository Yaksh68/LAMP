<?php
  $servername = "localhost";
  $username = "username";
  $password = "password";
  try{
    $conn = new PDO("mysql:localhost=$servername,dbname=myDB",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  }catch(PDOException $e){
    echo "Connection failed: $e->getMessage()";
  }

?>

$conn->close();
mysqli_close($connl);

$conn->quet($sql); $conn->error
mysqli_quety($conn,$sql); mysqli_error($conn);
$conn->exec($sql);

$lastid = $conn->insert_id;
$lastid = mysqli_insert_id($conn);
$lastid = $conn->lastInsertId();


CREATE TABLE MyGuest(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT TIMESTAMP
);

SELECT id,firstname,lastname FROM myGuests;
$result = $conn->query($sql);

if($result->num_rows> 0){
  while($row = $result->fetch_assoc()){
    echo "id: $row["id"] - Name: $row["firstname"] - $row["lastname"]";
  }
}

<!-- PROCEDURAL -->
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){

  }
}

INSERT INTO myGuests (firstname,lastname,email)
VALUES ('John','Doe','john@example.com');

UPDATE myGuests SET lastname='Doe' WHERE id=2;

DELETE FROM MyGuests WHERE id=3;



$target_dir = "/uploads";
$target_file = $target_dir.basename($_FILES["filetoupload"]["name"]);

$check= getimagesize($_FILES["filetoupload"]["tmp_name"]);
if($check !== false){

}

if(file_exists($targetfiel));

move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$targetfile)


$fileinfo = SplFileInfo($path);

$fileinfo->isDir();
$fileinfo->getFilename();
$fileinfo->getExtension();
$fileinfo->getSize();


$file = $_POST["file"];
$file = fopen($filename,"r");

while(($line = fgets($file) ) === true ){
  $data = explode("|",$line);
}
fclose($file);
