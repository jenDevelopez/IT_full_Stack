<?php
abstract class Shape{
  protected $ample;
  protected $alt = null;

   function __construct($ample,$alt = null) {
    $this->ample = $ample;
    $this->alt = $alt;
  }
  abstract public function area():float;
}

class Triangle extends Shape{
  public function area():float {
     return ($this->ample * $this->alt) / 2;
  }
}

class Rectangle extends Shape{
  public function area():float {
     return $this->ample * $this->alt;
  }
}

class Circle extends Shape{
  public function area():float {
    $r = $this->ample / 2;
    return M_PI * pow($r,2);
  }
}
$triangle = new Triangle(8,6);
echo $triangle->area() ."\n";
$rectangle = new Rectangle(8,6);
echo $rectangle->area()."\n";
$circle = new Circle(8);
echo $circle->area() ."\n";