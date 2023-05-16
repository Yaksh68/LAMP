<!DOCTYPE html>
<html>
    <body>
    
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Enter a string: <input type="text" name="fname"><br>
            <input type="submit" value:"SUBMIT">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
                $name = htmlspecialchars($_REQUEST['fname']); 
                function arrange_words($input_string) {
                    
                    $input_string = rtrim($input_string, '.');
                
                    
                    $words = explode(" ", $input_string);
                
                    
                    usort($words, function($a, $b) {
                        if (strlen($a) == strlen($b)) {
                            return strcmp($a, $b);
                        } else {
                            return strlen($b) - strlen($a);
                        }
                    });
                
                    
                    foreach ($words as &$word) {
                        $word = ucfirst(strtolower($word));
                    }
                
                    
                    $output_string = implode(" ", $words) . ".";
                
                    return $output_string;
                }
                
                
                
                $ans = arrange_words($name);
                
                
                echo $ans . "<br>";
                
            }
        ?>
    </body>
</html>