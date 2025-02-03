<?php
include ("conexion.php");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellido"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$usunom = $_POST["usunom"];
$contra = $_POST["contraseña"];

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usunom='$usunom'");
$row = mysqli_fetch_assoc($resultado);

if ($row) { // Verificamos que se encontró un usuario
    if ($nombre != $row['nombre'] || 
        $apellidos != $row['apellido'] || 
        $telefono != $row['telefono'] || 
        $email != $row['email'] || 
        $contra != $row['contraseña']) {
        
        // Actualizar solo los campos modificados
        $actualizar = "UPDATE usuarios SET 
                        nombre='$nombre', 
                        apellido='$apellidos', 
                        email='$email', 
                        telefono='$telefono',
                        contraseña='$contra' 
                        WHERE usunom='$usunom'";

        $resultado = mysqli_query($conexion, $actualizar);

        if ($resultado) {
            echo "<script>alert('Usuario actualizado con éxito'); 
            window.location='tablas.php'</script>";
        } else {
            echo "<script>alert('No se pudo actualizar los datos');
            window.history.go(-1);</script>";
        }
    } else {
        echo "<script>alert('No se realizaron cambios');
        window.location='tablas.php'</script>";
    }
}

