<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercici 4</title>
</head>
<body>
  <?php 
    function ContarNumeros($num=10,$patron=1){
      $i = 0;
      while($i <= $num){
        echo $i . "<br>";
        $i += $patron;
      }
    }
  ?>
</body>
</html>