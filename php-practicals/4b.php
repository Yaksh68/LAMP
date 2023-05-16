<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Enter N: <input type="text" name="n"><br><br>
        Enter array: <input type="text" name="arr"><br>
        <input type="submit" value="SUBMIT">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
        $N = htmlspecialchars($_REQUEST['n']); 
         
        $array = htmlspecialchars($_REQUEST['arr']); 
        $arr = explode(" ", $array);
        
        echo "<br> N = $N  <br> ";
        print_r($arr);

        function duplicate($arr,$n){
            $count = 0;
            for($i=0;$i<$n;$i++){
                for($j=$i+1;$j<$n;$j++){
                    if($arr[$i] == $arr[$j]){
                        $count++;
                        echo "<br> $arr[$i]<br>";
                        break;
                    }
                }
                
            }
            echo "<br>Number of duplicates: $count<br> <br>";
            
        }
        duplicate($arr,$N);
        
    }

    ?>
</body>
</html>