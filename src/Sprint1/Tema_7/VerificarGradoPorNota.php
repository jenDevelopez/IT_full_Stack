<?php
namespace App;

class VerificarGradoPorNota{
  public $nota;

  public function __construct($nota){
    $this->nota = $nota;
  }


  public function VerificarGradoPorNota($nota){
    switch($nota){
      case ($nota <= 3.3):
        echo "Suspendido";
        break;
      case ($nota >= 3.3 && $nota < 4.4):
        echo "Tercera División";
        break;
      case ($nota >= 4.5 && $nota < 5.9):
        echo "Segunda División";
        break;
      case ($nota >= 6 && $nota <= 10):
        echo "Primera División";
        break;
      case ($nota > 10 && $nota < 0):
        echo "Nota invalida";
        break;
      default:
        echo "Nota invalida";
    }
 }
}