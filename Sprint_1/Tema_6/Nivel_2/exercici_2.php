<?php

class Padre{
  public $saludo = "Hola";

  function __construct($saludo ="Hola "){
    $this->saludo = $saludo;
  }
  function __get($saludo){
    $this->saludo = $saludo;
  }
}

class Hijo extends Padre{

  function __construct( $saludo ){
   $this->saludo = $saludo;
  }

  function __get($nombre){
    $this->saludo = $this->saludo.$nombre;
  }

}

$padre = new Padre();
echo $padre->saludo;
$hijo = new Hijo('Jennifer');
echo $hijo->saludo;