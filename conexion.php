<?php
// Conexión a la base de datos
$conexion = new mysqli("bibliotecamuskiz.cb2cweukck18.eu-north-1.rds.amazonaws.com", "admin", "d4rk1234", "bdbiblioteca", "3306");

// Comprobación de conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


echo "Conexión exitosa.\n";