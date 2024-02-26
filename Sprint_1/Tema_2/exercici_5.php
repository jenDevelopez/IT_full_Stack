<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercici 5</title>
</head>
<body>
  <?php 
   function VerificarGradoPorNota($nota){
      switch($nota){
        case ($nota <= 3.3):
          echo "Suspendido";
          break;
        case ($nota >= 3.3 && $nota < 4.4):
          echo "Tercera División";
          break;
        case ($nota >= 4.5 && $nota < 5.9):
          echo "Segunda División";
          break;
        case ($nota >= 6 && $nota <= 10):
          echo "Primera División";
          break;
        case ($nota > 10 && $nota < 0):
          echo "Nota invalida";
          break;
        default:
          echo "Nota invalida";
      }
   }
  ?>
</body>
</html>