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
        function HN($num){
            $rem = $sum  = 0;
            $n = $num;
            while($num != 0){
                $rem = $num %10;
                $sum += $rem;
                $num = intval($num/10);
            }
            if($n % $sum == 0){
                echo $n. " is a harshad number.";
            }
            else{
                echo $n. " is not a harshad number.";
            }
        }
        HN(1729);
        
    ?>
</body>
</html>