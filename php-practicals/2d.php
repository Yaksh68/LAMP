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
        function AN($num){
            $s = $num*$num;
            $n = $num;
            $cnt = 0;
            while($n != 0){
                $n = intval($n/10);
                $cnt++;
            }
            
            $div = 10 **$cnt;
            
            if($s % $div == $num){
                echo $num. " is  an automorphic number";
            }
            else{
                echo $num. " is not an automorphic number";
            }
        
            
        }
        AN(25);
    ?>
</body>
</html>