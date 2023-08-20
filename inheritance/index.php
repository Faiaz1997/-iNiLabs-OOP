<?php

class Shape {
    protected $radius,$width,$height;

    public function __construct($radius,$width,$height) {
        $this->radius = $radius;
        $this->width = $width;
        $this->height = $height;
    }

    public function circlearea() {
        return pi() * $this->radius * $this->radius;
    }
    public function rectanglearea() {
        return $this->width * $this->height;
    }
}

class Circle extends Shape {
    
    protected $radius;
    public function __construct($radius) {
        $this->radius = $radius;
        $this->circlearea();
    }
}

class Rectangle extends Shape {

    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
        $this->rectanglearea();
    }

}

$circle = new Circle(2);
echo " Area of the circle: " . $circle->circlearea() . "<br>";

$rectangle = new Rectangle(4, 6);
echo  " Area of the rectangle: " . $rectangle->rectanglearea() . "<br>";

?>