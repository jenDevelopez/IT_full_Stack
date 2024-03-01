<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercici 2</title>
</head>
<body>
  <?php
    $X = array(10, 20, 30, 40, 50,60);
    echo "Longitud del array: " . count($X) . "<br>"; 
    $Y  = array_filter($X, fn($element) => $element !== $X[count($X)-1]);
    echo "Longitud del array: " . count($Y) . "<br>"; 
   
    ?>
</body>
</html>