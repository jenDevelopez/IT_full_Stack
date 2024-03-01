<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercici 1</title>
</head>
<body>
<?php
  function PrecioLlamada($minutosLlamada){
    $coste = 10;
    if($minutosLlamada > 3){
      $j = $minutosLlamada;
      while($j > 3){
        $j--;
        $coste +=5;
        
      }
      return "El coste de la llamada es $coste centimos";
    }else{
      return "El coste de la llamada es de $coste centimos";
    }
  }
  ?>
</body>
</html>