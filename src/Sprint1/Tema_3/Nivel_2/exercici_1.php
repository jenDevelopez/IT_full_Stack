<?php
$array1 = array(1,2,3,4,5);
$array2 = array(2,4);
function mezclaArraysYNumerosEnComun($array1,$array2){
  $intersecciones = array();
  foreach($array1 as $item){
    if(in_array($item,$array2)){
      $intersecciones[] = $item;
    }
  }
  echo $intersecciones;
  echo array_merge($array1,$array2);
}

mezclaArraysYNumerosEnComun($array1,$array2);