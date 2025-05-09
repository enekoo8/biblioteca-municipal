<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="estilos_is.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>
            Biblioteca Municipal de Muskiz
        </h1>
        <!-- Navegador central -->
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="quienes_somos.php">¿Nosotros?</a></li>
                <li><a href="libros.php">Libros</a></li>
                <li><a href="service.php">Servicios</a></li>
                <li><a href="normas.php">Normas</a></li>
                <li><a href="inicioSesion.php">Iniciar sesión</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h2>Iniciar sesion</h2>
        <form action="verificacion.php" method="post"> 
            <div>
                <label for="user"> Usuario: </label><br>
                <input type="text" id="Usuario" name="nom" placeholder="Introduce tu usuario" required/>
                <!-- Se pone tipo text para que entre texto plano -->
            </div>
            <div>
                <label for="password"> Contraseña: </label><br>
                <input type="password" id="Contraseña" name="contra" placeholder="Introduce tu contraseña" required/>
            </div>
            <button type="submit" id="login"> Login </button>
        </form>
        <p>¿No tienes cuenta?</p>
        <!-- Se pone un botón de registrarse en caso de que el usuario no tenga cuenta -->
        <a href="registrarse.php" id="registrate">Registrate</a>
    </section>
</body>