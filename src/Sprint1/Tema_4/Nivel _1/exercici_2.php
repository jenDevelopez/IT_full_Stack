<?php

class Shape{
  public $ample;
  public $alt;

  public function __construct($ample, $alt){
    $this->ample = $ample;
    $this->alt = $alt;
  }
}

class Triangle extends Shape{
  function __construct($ample, $alt){
    $this->ample = $ample;
    $this->alt = $alt;
  }


  function area(){
    $area = ($this->ample * $this->alt) / 2;
    echo "El area del triangle es $area \n";
  }
}

class Rectangle extends Shape{
  function __construct($ample, $alt){
    $this->ample = $ample;
    $this->alt = $alt;
  }

  function area(){
    $area = $this->ample * $this->alt;
    return "El area del rectangle es $area \n";
  }
}
$triangulo = new Triangle(8,4);
echo $triangulo->area();
$rectangulo = new Rectangle(8,4);
echo $rectangulo->area();