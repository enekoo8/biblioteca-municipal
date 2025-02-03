<?php
    include ("conexion.php");
    $usuarios = "SELECT * FROM usuarios";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="D4RK 3NT3RPR1S3">
    <meta name="fecha" content="31-01-2025">
    <meta name="PROYECTO/RETO" content="RETO-2">
    <meta name="keywords" content="libros, biblioteca, autores, literatura, lectura">
    <title>Biblioteca municipal</title>
    <link rel="shortcut icon" href="imagenes/Iconos/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos_tab.css">
</head>
<body>
    <div class="consulta">
        <h2>Usuarios registrados <a id="volver" href="index.html">Volver</a></h2>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Nombre de usuario</th>
                <th>Contraseña</th>
                <th>Operacion</th>
            </tr>
            
            <?php $resultado = mysqli_query($conexion, $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <td><?php echo $row["nombre"];?></td>
                    <td><?php echo $row["apellido"];?></td>
                    <td><?php echo $row["telefono"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["usunom"];?></td>
                    <td><?php echo $row["contraseña"];?></td>
                    <td>
                        <a href="formularioAct.php?id=<?php echo $row["usunom"];?>">Editar</a> |
                        <a href="eliminar.php?id=<?php echo $row["usunom"];?>" class="eliminar">Eliminar</a>
                    </td>
                </tr>
                <?php } mysqli_free_result($resultado);?>
        </table>
    </div>
</body>
</html>