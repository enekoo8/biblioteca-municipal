<?php
include ("conexion.php");

$usunom = $_GET['id'];
$eliminar = "DELETE FROM usuarios WHERE usunom='$usunom'";

$resultado = mysqli_query($conexion, $eliminar);

if ($resultado) {
    echo "<script>
        alert('Usuario eliminado con éxito'); 
        window.location.href = 'tablas.php';
    </script>";
} else {
    echo "<script>alert('No se pudo borrar datos');</script>";
    header("Refresh: 5; URL=tablas.php");
    exit();
}