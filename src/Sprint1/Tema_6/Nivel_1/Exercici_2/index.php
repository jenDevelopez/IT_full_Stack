<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Básico</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <h1>Formulario de Contacto</h1>
  <form action="procesa.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required>
    <br>
    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" required></textarea>
    <br>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>
