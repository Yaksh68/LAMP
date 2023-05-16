<!DOCTYPE html>
<html>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br>

        <input type="submit" value="Upload Image" name="submit">
    </form>
    <?php
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "<br>File is an image - " . $check["mime"] . ".<br>";
                $uploadOk = 1;
            } else {
                echo "<br>File is not an image.<br>";
                $uploadOk = 0;
            }
        }

        if (file_exists($target_file)) {
        echo "<br>Sorry, file already exists.<br>";
        $uploadOk = 0;
        }



        if ($uploadOk == 0) {
            echo "<br>Sorry, your file was not uploaded.<br>";
        } 
        else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "<br>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
            } else {
                echo "<br>Sorry, there was an error uploading your file.<br>";
            }
        }
    ?>

</body>
</html>

