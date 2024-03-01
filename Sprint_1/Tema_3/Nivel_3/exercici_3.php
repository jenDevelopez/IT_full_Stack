<?php
function esPrimo($num){
  if($num <= 1) return false;
  if($num == 2) return true;
  if($num % 2 == 0) return false;
  $ceil = ceil(sqrt($num));
  for($i = 3; $i <= $ceil; $i += 2){
    if($num % $i == 0) return false;
  }
  return true;
}

function sumaEnteros($arrayEnteros){
  return array_reduce($arrayEnteros, function($acc, $curr) {
   if(esPrimo($curr)){
     $acc += $curr;
   }
   return $acc;
  }, 0);
}


