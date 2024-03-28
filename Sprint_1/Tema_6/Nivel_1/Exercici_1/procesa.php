<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
  }
  if(isset($_POST['correo'])){
    $correo = $_POST['correo'];
  }
  if(isset($_POST['mensaje'])){
    $mensaje = $_POST['mensaje'];
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarjeta con Datos del Formulario</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <h2>Datos del Formulario</h2>
  <div class="tarjeta">
    <p>Nombre: <span id="nombre"><?php echo $nombre; ?></span></p>
    <p>Correo electrónico: <span id="correo"><?php echo $correo; ?></span></p>
    <p>Mensaje: <span id="mensaje"><?php echo $mensaje; ?></span></p>
    <a href="<?php echo $_SERVER['HTTP_REFERER']?>">Volver al formulario</a>
  </div> 
</body>
</html>
