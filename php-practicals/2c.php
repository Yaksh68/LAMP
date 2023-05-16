<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function KN($n){
            if ($n == 1){
                echo $n. " is a Kaprekar number.";
                return;
            }   
            $s = $n * $n;   
            $cnt = 0;   
            while ($s)   
            {   
                $cnt++;   
                $s = (int)($s / 10);   
            }   
            
            $s = $n * $n;   
            for ($i = 1;$i < $cnt;$i++)   
            {   
                $eq= pow(10, $i);   
                if ($eq == $n)   
                    continue;   
            
                $sum = (int)($s / $eq) + $s % $eq;   
                if ($sum == $n){   
                    echo $n . " is a kaprekar number.";
                    return ;   
                }
            }
            echo $n. " is not a kaprekar number.";
            return;
            
        }  

        
        KN(297);
    ?>
</body>
</html>