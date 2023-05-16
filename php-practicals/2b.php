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
        function specialNumber($num){
            $rem = $sum  = 0;
            $mul = 1;
            $n = $num;
            while($num != 0){
                $rem = $num %10;
                $sum += $rem;
                $mul *= $rem ;
                $num = intval($num/10);
            }
            if(($sum+$mul) == $n){
                echo $n. " is a special number";
            }
            else{
                echo $n. " is not a special number.";

            }
        }
        specialNumber(59);
    ?>
</body>
</html>