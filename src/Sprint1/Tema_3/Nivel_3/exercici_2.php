<?php
  function filtradoStringCaracteresPares($arrayString){
    return array_filter($arrayString,fn($string) => strlen($string) % 2 == 0);
  }

  $arrayPalabras = array("rojo","amarillo","verde");

  print_r(filtradoStringCaracteresPares($arrayPalabras));