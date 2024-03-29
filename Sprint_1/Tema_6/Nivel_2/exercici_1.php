<?php 
class ObtenerDatos{
  function getFile(){
    echo __FILE__ ."\n";
  }

  function getDir(){
    echo __DIR__ . "\n";
  }
}

$prueba = new ObtenerDatos();
$prueba->getFile();
$prueba->getDir();