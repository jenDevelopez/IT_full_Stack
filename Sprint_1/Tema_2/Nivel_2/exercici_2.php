<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercici 2</title>
</head>

<body>
  <?php
  function CalcularPrecioChocolates($cantidadChocoltates)
  {
    return $cantidadChocoltates * 1;
  }
  function CalcularPrecioChicles($cantidadChicles)
  {
    return $cantidadChicles * 0.5;
  }
  function CalcularPrecioCaramelos($cantidadCaramelos)
  {
    return $cantidadCaramelos * 1.5;
  }

  function CalcularPrecioTotal($cantidadChocoltates, $cantidadChicles, $cantidadCaramelos)
  {
    $total =  CalcularPrecioChocolates($cantidadChocoltates) + CalcularPrecioChicles($cantidadChicles) + CalcularPrecioCaramelos($cantidadCaramelos);
    return "El precio total es: " . $total . " euros";
  }

  ?>
</body>

</html>