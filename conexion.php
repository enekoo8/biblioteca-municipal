<?php
// Conexión a la base de datos
$conexion = mysqli_connect("bibliotecamuskiz.cb2cweukck18.eu-north-1.rds.amazonaws.com", "admin", "d4rk1234", "bdbiblioteca",3306);

// Comprobación de conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8");

echo "Conexión exitosa.\n";