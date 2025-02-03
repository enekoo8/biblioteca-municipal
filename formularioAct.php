<?php
    include ("conexion.php");
    $usuarios = "SELECT * FROM usuarios";
?>

<!DOCTYPE html>
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
    <link rel="stylesheet" href="estilos_tab2.css">
</head>
<body>
    <div class="consulta">
        <h2>Usuarios Registrados</h2>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Nombre de Usuario</th>
                <th>Contraseña</th>
                <th>Operación</th>
            </tr>

            <?php 
            $resultado = mysqli_query($conexion, $usuarios);
            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <form action="actualizar.php" method="POST">
                        <td><input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"></td>
                        <td><input type="text" name="apellido" value="<?php echo $row['apellido']; ?>" ></td>
                        <td><input type="tel" name="telefono" value="<?php echo $row['telefono']; ?>"></td>
                        <td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
                        <td><input type="text" name="usunom" value="<?php echo $row['usunom']; ?>" readonly></td>
                        <td><input type="text" name="contraseña" value="<?php echo $row['contraseña']; ?>"></td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $row['usunom']; ?>">
                            <button type="submit">Actualizar</button>
                        </td>
                    </form>
                </tr>
            <?php } 
            mysqli_free_result($resultado);
            ?>
        </table>
    </div>
</body>
</html>