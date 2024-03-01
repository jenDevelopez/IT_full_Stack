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
    unset($X[0]);
    $X = array_values($X);
    echo "Longitud del array despues de eliminar un elemento: " . count($X) . "<br>";
    
    ?>
</body>
</html>