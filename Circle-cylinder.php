<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Circle
{
    protected $radius;
    protected $color;
    public function __construct($radius,$color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getArea(){
        return pi() * $this->radius ** 2;
    }
    public function display(){
        return 'Circle { ' . 'Radius : ' . $this->radius . ' - Color : ' . $this->color . ' } ';
    }
}
class Cylinder extends Circle
{
    private $height;
    public function __construct($radius, $color,$height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getVolume(){
        return parent::getArea() * $this->height;
    }
    public function display(){
        return 'Cylinder { ' . 'Radius : ' . $this->radius
            . ' - Color : ' . $this->color
            . ' - height : ' . $this->height .' } ';
    }
}
$circle = new Circle(3,'blue');
echo $circle->display() . '<br>';
echo 'Area = ' . $circle->getArea() . '<br>';
$cylinder = new Cylinder(4,'red',5);
echo $cylinder->display() . '<br>';
echo 'Volume = ' . $cylinder->getVolume() . '<br>';
?>
</body>
</html>