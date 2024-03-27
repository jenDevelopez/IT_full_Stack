<?php
class PokerDice{
  private $cares = array('As','K','Q','J','7','8');

  function throw(){
    return rand(0,count($this->cares)-1);

  }

  function shapeName(){
    $tirada = $this->throw();
    return $this->cares[$tirada];
  }
}

function Tirardados($numDados){
  $i = 0;
  $dados = array();
  while($i < $numDados){
    $dado = new PokerDice();
    $dados[$i] = $dado->shapeName();
    $i++;
  }
  return $dados;
}

$cincoDadosALaVez = Tirardados(5);
foreach($cincoDadosALaVez as $dado){
  echo "Dado:" . $dado . "\n";
}