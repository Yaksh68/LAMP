<!DOCTYPE html>
<html>
<head>
    <title>Area Calculator</title>
</head>
<body>
    <h1>Practical 5A</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <h2>Rectangle</h2>
        Length: <input type="number" name="length"><br><br>
        Breadth: <input type="number" name="breadth"><br>
        
        <h2>Square</h2>
        Side: <input type="number" name="side"><br>
        
        <h2>Circle</h2>
        Radius: <input type="number" name="radius"><br>
        <br>
        <input type="submit" value="Calculate">
        <br>
    </form>
</body>
</html>

<?php

interface Area {
    public function area();
}

class Rectangle implements Area {
    protected $length;
    protected $breadth;
    
    public function __construct($length, $breadth) {
        $this->length = $length;
        $this->breadth = $breadth;
    }
    
    public function area() {
        return $this->length * $this->breadth;
    }
}

class Square extends Rectangle {
    public function __construct($side) {
        parent::__construct($side, $side);
    }
}

class Circle implements Area{
    protected $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function area() {
        return 3.14 * $this->radius * $this->radius;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST["length"];
    $breadth = $_POST["breadth"];
    $side = $_POST["side"];
    $radius = $_POST["radius"];
    
    $rectangle = new Rectangle($length, $breadth);
    $square = new Square($side);
    $circle = new Circle($radius);
    
    echo "</p>";
    echo "Area of Rectangle: " . $rectangle->area() . "<br>";
    echo "Area of Square: " . $square->area() . "<br>";
    echo "Area of Circle: " . $circle->area() . "<br>";
}
?>