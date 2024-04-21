<?php
function numerosAlCuadrado($arrayEnteros){
  return array_map(fn($num) => pow($num,3),$arrayEnteros);
}

$numeros = array(1,2,3);
print_r(numerosAlCuadrado($numeros));