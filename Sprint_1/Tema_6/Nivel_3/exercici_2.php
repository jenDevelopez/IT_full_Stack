<?php 
trait Turbo{
  function boost(){
    echo "Se ha iniciado el turbo";
  }
}
class Car{
  public $marca;
  public $matricula;
  public $tipoCombustible;
  public $velocidadMaxima;

  function __construct($marca ,$matricula,$tipoCombustible,$velocidadMaxima){
    $this->marca = $marca;
    $this->matricula = $matricula;
    $this->tipoCombustible = $tipoCombustible;
    $this->velocidadMaxima =$velocidadMaxima;
  }
  use Turbo;
}

$coche = new Car('Opel','123XYZ','Diesel',200);
echo $coche->boost();