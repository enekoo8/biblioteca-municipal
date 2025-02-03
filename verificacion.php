<?php
include ("conexion.php");

// Credenciales fijas para "admin"
$correctUsername = "admin";
$correctPassword = "1234";

// Credenciales enviadas desde el formulario
$inputUsername = $_POST['nom'];
$inputPassword = $_POST['contra'];

// Buscar si el usuario existe en la base de datos
$query = "SELECT * FROM usuarios WHERE usunom = '$inputUsername'";
$resultado = mysqli_query($conexion, $query);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    // Usuario encontrado, obtener datos
    $row = mysqli_fetch_assoc($resultado);

    // Si el usuario es "admin", verificar su contraseña
    if ($inputUsername == $correctUsername) {
        // Verificar si la contraseña de "admin" es correcta
        if ($inputPassword == $correctPassword) {
            echo "<script>alert('Inicio de sesión exitoso');
            window.location='tablas.php'</script>";
        } else {
            echo "<script>alert('Contraseña incorrecta');
            window.history.go(-1);</script>";
        }
    } else {
        // Si el usuario no es "admin", comprobar la contraseña con la base de datos
        if ($inputPassword == $row['contraseña']) {
            echo "<script>alert('Usuario sin permisos');
            window.history.go(-1);</script>";
        } else {
            echo "<script>alert('Contraseña incorrecta');
            window.history.go(-1);</script>";
        }
    }
} else {
    // Si el usuario no existe en la base de datos
    echo "<script>alert('Usuario no encontrado');
    window.history.go(-1);</script>";
}
?>