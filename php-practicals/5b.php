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

        class Rectangle {
            private $length;
            private $breadth;

            public function __construct($length, $breadth) {
                $this->length = $length;
                $this->breadth = $breadth;
            }

            public function setLength($length) {
                $this->length = $length;
            }

            public function setBreadth($breadth) {
                $this->breadth = $breadth;
            }

            public function getLength() {
                return $this->length;
            }

            public function getBreadth() {
                return $this->breadth;
            }

            public function getArea() {
                return $this->length * $this->breadth;
            }

            public function displayInfo() {
                echo "Length: " . $this->length . "<br>";
                echo "Breadth: " . $this->breadth . "<br>";
                echo "Area: " . $this->getArea() . "<br><br>";
            }
        }

       
        $rect1 = new Rectangle(10, 20);
        $rect1->displayInfo();

        $rect2 = new Rectangle(5, 8);
        $rect2->setLength(12);
        $rect2->displayInfo();

        $rect3 = new Rectangle(3, 7);
        $rect3->setBreadth(10);
        $rect3->displayInfo();

        $rect4 = new Rectangle(15, 25);
        $rect4->setLength(30);
        $rect4->setBreadth(40);
        $rect4->displayInfo();

        $rect5 = new Rectangle(12, 15);
        $rect5->setLength(20);
        $rect5->setBreadth(25);
        $rect5->displayInfo();
    ?>
</body>
</html>