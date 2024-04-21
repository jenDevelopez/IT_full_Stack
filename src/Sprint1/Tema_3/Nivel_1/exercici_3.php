<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercici 3</title>
</head>
<body>
  <?php 
  $array = array("Hola","mundo","php");
    function existeLetraEnArray($arrayPalabras,$letra){
      foreach($arrayPalabras as $palabra){
        if (stripos($palabra, $letra) !== false) {
          return 'true';
      }
      return 'false';
    }
  }

  ?> 
</body>
</html>