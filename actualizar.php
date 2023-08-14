<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>actualizar</title>
</head>
<body>
<form method="post" action="actualizar.php">
      <h2>actualizacion de datos </h2>
    <div class="form-group">
    <label for="id">id:</label>
        <input type="text" name="id" id="id" required>
        </div>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>
        </div>
      <div class="form-group">
        <label for="nombreusuario">Usuario:</label>
        <input type="text" name="nombreusuario" id="nombreusuario" required>
      </div>
      <button type="submit">actualizar</button>
     <button><a href="index.php">regresar</a></button>
      </body>
      </html>
<?php
   // Verificar si se ha enviado el formulario
   require 'conexion.php';
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreusuario = $_POST["nombreusuario"];
    $email = $_POST["email"];
    $id = $_POST["id"];
   

    // Consulta para actualizar un registro
    $sql = "UPDATE sesion SET nombre_de_usuario='$nombreusuario', email='$email' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}
?>
