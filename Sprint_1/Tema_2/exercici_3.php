<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercici 3</title>
</head>
<body>
<?php 
  // Parte a)
    $x = 5;
    $y = 10;
    $n = 1.5;
    $m = 8.65;

    echo "La suma de $x y $y es" . " ". ($x + $y) . "<br>";
    echo "La resta de $x y $y es" . " ". ($x - $y). "<br>";
    echo "El producto de $x y $y es" . " ". ($x * $y). "<br>";
    echo "El modulo de $x y $y es" . " ". ($x % $y). "<br>";
    echo "<br>";
    echo "La suma de $n y $m es" . " ". ($n + $m) . "<br>";
    echo "La resta de $n y $m es" . " ". ($n - $m). "<br>";
    echo "El producto de $n y $m es" . " ". ($n * $m). "<br>";
    echo "El modulo de $n y $m es" . " ". ($n % $m). "<br>";
    echo "<br>";
    echo "El doble de $x es " . ($x * 2) . "<br>";
    echo "El doble de $y es " . ($y * 2) . "<br>";
    echo "El doble de $n es " . ($n * 2) . "<br>";
    echo "El doble de $m es " . ($m * 2) . "<br>";
    echo "<br>";
    echo "La suma de $x, $y, $n y $m es " . ($x + $y +$n +$m) . "<br>";
    echo "El producto de $x, $y, $n y $m es " . ($x * $y *$n *$m) . "<br>";

    // Parte b)
   function Calculadora($num1,$num2,$operador){
      switch ($operador) {
        case "+":
          return $num1 + $num2;
        case "-":
          return $num1 - $num2;
        case "*":
          return $num1 * $num2;
        case "/":
          return $num1 / $num2;
        case "%":
          return $num1 % $num2;
      }
   }


  ?>
</body>
</html>