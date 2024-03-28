<?php
abstract class Shape{
  protected $ample;
  protected $alt;

   function __construct($ample,$alt) {
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

$triangle = new Triangle(8,6);
echo $triangle->area() ."\n";
$rectangle = new Rectangle(8,6);
echo $rectangle->area()."\n";