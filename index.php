<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 


    <?php
    require 'conexion.php';

    $sql= "SELECT  * from sesion";
    $resultado= $conn->query($sql);
    ?>
    <div>

    
    <h1 class="cabecera">CRUD</h1>
    </div>
    <div class="contenedor" >
    <button class="crear"><a href="crear.php">Agregar nuevo Registro</a></button>

        <table>
            <thead>
                <tr>
                    <th>ID </th>
                    <th>nombre </th>
                    <th>email</th>
                    <th>nombreusuario</th>
                    <th>contraseña</th>
                    <th>acciones</th>
                   </tr>
            </thead>
            <tbody>
                <?php      
      while ($fila = $resultado->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php  echo $fila['id']?></td>
                    <td><?php  echo $fila['nombre']?></td>
                    <td><?php  echo $fila['email']?></td>
                    <td><?php  echo $fila['nombre_de_usuario']?></td>
                    <td><?php  echo $fila['contraseña']?></td>
                    <td>
                        <button class="Actualizar"><a href="actualizar.php">actualizar</a></button>
                        <button class="eliminar"><a href="eliminar.php">Eliminar</a></button>
                    </td>
                </tr> <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>
