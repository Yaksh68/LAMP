<html>

<body>
    <form method="post" onsubmit="<?PHP $_SERVER['PHP_SELF'] ?>">
        length: <input type="text" name="length"><br>
        breadth: <input type="text" name="breadth"><br>
        <input type="submit">
    </form>
</body>

</html>

<?PHP
class Rectangle
{
    public $length, $breadth, $are, $per;

    function __construct()
    {
        $this->length = 0;
        $this->breadth = 0;
    }

    function setLen($len)
    {
        $this->length = $len;
    }

    function getLen()
    {
        echo "Length : " . $this->length . "<br>";
    }

    function setBre($bre)
    {
        $this->breadth = $bre;
    }

    function getBre()
    {
        echo "Breadth : " . $this->breadth . "<br>";
    }

    function area()
    {
        $this->are = $this->length * $this->breadth;
    }
    function perimeter()
    {
        $this->per = 2 * ($this->length + $this->breadth);
    }

    function __toString()
    {
        return "classname : Rectangle<br>area : " . $this->are . "<br>perimeter : " . $this->per;
    }
}

if (!empty($_POST['length']) and !empty($_POST['breadth'])) {
    $l = $_POST['length'];
    $b = $_POST['breadth'];

    for($i = 0; $i < 5; $i++) {
        $rec1 = new Rectangle();
        $rec1->setLen($l);
        $rec1->getLen();
        $rec1->setBre($b);
        $rec1->getBre();
        $rec1->area();
        $rec1->perimeter();
        echo $rec1;
        $l += $i+1;
        $b += $i+3;
        echo "<hr>";
    }
}
?>