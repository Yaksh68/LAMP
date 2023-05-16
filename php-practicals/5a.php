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
        Enter Length and Breadth for Rectangle: <input type="text" name="arr1"><br><br>
        Enter side for square: <input type="text" name="arr2"><br><br>
        Enter radius of a circle: <input type="text" name="arr3"><br><br>
        <input type="submit" value="SUBMIT">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
            
            
            $array1 = htmlspecialchars($_REQUEST['arr1']); 
            $array2 = htmlspecialchars($_REQUEST['arr2']); 
            $array3 = htmlspecialchars($_REQUEST['arr3']); 
            $arr1 = explode(" ", $array1);
            $arr2 = explode(" ", $array2);
            $arr3 = explode(" ", $array3);
        

            
            interface Shape {
                public function area();
            }

            
            class Rectangle implements Shape {
                protected $length;
                protected $width;

                public function __construct($length, $width) {
                    $this->length = $length;
                    $this->width = $width;
                }

                public function area() {
                    return $this->length * $this->width;
                }
            }

            
            class Square extends Rectangle {
                public function __construct($side) {
                    parent::__construct($side, $side);
                }
            }

            
            class Circle implements Shape {
                protected $radius;

                public function __construct($radius) {
                    $this->radius = $radius;
                }

                public function area() {
                    return pi() * pow($this->radius, 2);
                }
            }

            
            $rectangle = new Rectangle($arr1[0], $arr1[1]);
            $square = new Square($arr2[0]);
            $circle = new Circle($arr3[0]);

            echo "<br> Rectangle area: " . $rectangle->area() . "<br>";
            echo "<br>Square area: " . $square->area() . "<br>";
            echo "<br>Circle area: " . $circle->area() . "<br>";
        }
    ?>

</body>
</html>