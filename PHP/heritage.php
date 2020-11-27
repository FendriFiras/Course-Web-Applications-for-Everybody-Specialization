<?php
class Point
{
    public $x, $y;
    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    function __toString()
    {
        return $this->x . "," . $this->y;
    }
}

//heritage
class Pixel extends Point
{
    public $color;
    function __construct($x, $y, $color)
    {
        parent::__construct($x, $y);
        $this->color = $color;
    }

    function __toString()
    {
        return parent::__toString() . "[" . $this->color . "]";
    }
}

$point = new Point(2, 3);
$pixel = new Pixel(2, 3, "red");
echo $point . "<br>"; // 2,3
echo $pixel; // 2,3[red]


?>