<?php

class Employee {
  public $nom;//nombre
  public $sou;//sueldo

  public function __construct($nom, $sou) {
    $this->nom = $nom;
    $this->sou = $sou;
  }
  function paga_impuestos() {
     if($this->sou < 6000) {
      echo "$this->nom no paga impuestos \n";
     }else{
      echo "$this->nom paga impuestos \n";
     }
  }
}

$employee1 = new Employee('Jennifer',3000);
$employee2 = new Employee('Erley',10000);
echo $employee1->paga_impuestos();
echo $employee2->paga_impuestos();