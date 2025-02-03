<?php
include ("conexion.php");

$nombre = $_POST["nom"];
$apellido = $_POST["ape"];
$telefono = $_POST["tel"];
$email = $_POST["mail"];
$usunom = $_POST["usunom"];
$contra = $_POST["contraseña"];


$insertar = "INSERT INTO usuarios (nombre, apellido, telefono, email, usunom, contraseña) VALUES ('$nombre', '$apellido', '$telefono', '$email', '$usunom', '$contra')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script>alert('Usuario registrado con exito'); 
    window.location='inicioSesion.html'</script>";
}else {
    echo "<script>alert('No se pudo registrar');
    window.history.go(-1);</script>";
}
