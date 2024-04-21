<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercici 1</title>
</head>

<body>
  <?php
  function CalcularNumerosPrimos($num)
  {
    $arrayNumerosEnteros = [];
    for ($i = 2; $i < $num; $i++) {
      array_push($arrayNumerosEnteros, $i);
      for ($j = 1; $j < count($arrayNumerosEnteros); $j++) {
        if ($arrayNumerosEnteros[$j] % $arrayNumerosEnteros[0] === 0) {
          array_splice($arrayNumerosEnteros, $j, 1);
        }
      }
    }

    return $arrayNumerosEnteros;
  }


  ?>
</body>

</html>