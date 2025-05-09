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
    <link rel="stylesheet" href="estilos_re.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script src="validacion.js"></script>
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
        <h2>Regístrate</h2>
        <form action="insertar.php" method="post">
            <div>
                <label for="nombre">*Nombre: </label><br>
                <input type="text" id="nombre" name="nom" required/>
            </div>
            <div>
                <label for="apellidos">*Apellidos: </label><br>
                <input type="text" id="apellidos" name="ape" required/>
            </div>
            <div>
                <label for="telefono">*Teléfono: </label><br>
                <input type="tel" id="telefono" name="tel" required/>
            </div>
            <div>
                <label for="user">*Introduce tu correo: </label><br>
                <!-- Se usa el tipo email para que sea obligatorio meter un @ -->
                <input type="email" id="correo" name="mail" required>
            </div>
            <div>
                <label for="user">*Introduce un nombre de usuario: </label><br>
                <input type="text" id="Usuario" name="usunom" required/>
            </div>
            <div>
                <label for="password">*Introduce una contraseña: </label><br>
                <input type="password" id="Contraseña" name="contraseña" required/>
                <!-- Se pone required para que sea obligatorio el campo en caso de querer registrarse -->
            </div>
            <div>
                <!-- Se usa tipo password para que no se muestre en pantalla la contraseña -->
                <label for="password">*Vuelve a introducir la contraseña: </label><br>
                <input type="password" id="Contraseña2" required/>
            </div>
            <p>*=obligatorio</p>
            <button type="submit" id="Registrate">Registrarse</button>
        </form>
    </section>
</body>