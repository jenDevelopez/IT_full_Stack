<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercici 2</title>
</head>

<body>
  <?php

  $str = "Hello World";
  echo $str . "<br>";
  $str_upper = strtoupper($str);
  echo $str_upper . "<br>";
  $string_length = strlen($str);
  echo $string_length . "<br>";
  $string_rev = strrev($str);
  echo $string_rev . "<br>";
  $frase = "Aquest és el curs de PHP";
  echo $str . "<strong> " . $frase . "</strong>";

  ?>
</body>

</html>