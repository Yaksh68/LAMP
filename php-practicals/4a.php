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
        Enter K: <input type="text" name="k"><br><br>
        Enter array: <input type="text" name="arr"><br>
        <input type="submit" value="SUBMIT">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
        $N = htmlspecialchars($_REQUEST['n']); 
        $K = htmlspecialchars($_REQUEST['k']); 
        $array = htmlspecialchars($_REQUEST['arr']); 
        $arr = explode(" ", $array);
        
        echo "<br> N = $N , K = $K <br> ";
        print_r($arr);
        function printPairs($arr, $n, $sum)
        {
            
            $count = 0;
        
            echo "<br><br> Pairs: <br> ";
            for ($i = 0; $i < $n; $i++){
                for ( $j = $i + 1; $j < $n; $j++){
                    if ($arr[$i] + $arr[$j] == $sum){
                        echo "( $arr[$i]  ,$arr[$j] )  <br>";
                        $count++;
                    }
                }
            }
            echo "<br> Number of pairs in the array: $count <br>";
        }
        printPairs($arr,$N,$K);
    }

    ?>
</body>
</html>