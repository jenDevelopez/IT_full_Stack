<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercici 6</title>
</head>
<body>
  <?php
    function isBitten(){
      $numRandom = rand(0,1);
      if($numRandom == 1){
        echo "true";
        return true;
      }else{
        echo "false";
        return false;
      }
    }
    isBitten();
  ?>
</body>
</html>