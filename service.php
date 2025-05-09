<!DOCTYPE html>
<html lang="en">
<html>
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
    <link rel="stylesheet" href="estilos_se.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script src="javascript.js"></script>
</head>
<body>
    <!-- Encabezado y Navegación -->
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
            <div class="notificacion">
        </nav>
    </header>
    <!-- Contenido Principal -->
    <div class="container">
        <article id="texto">
            <h2 id="servicios">Nuestros Servicios</h2><br>
            <p>El área de servicios de la Biblioteca Municipal ofrece una gama de recursos y asistencia para satisfacer las necesidades de la comunidad. Aquí, los usuarios pueden acceder al préstamo de libros, revistas y material multimedia para llevar a casa o disfrutar en las instalaciones. La biblioteca cuenta con espacios de lectura y estudio, tanto individuales como grupales, y proporciona acceso gratuito a Internet y computadoras. Además, el personal está disponible para ofrecer orientación en investigación y referencia, ayudando a los usuarios a encontrar información y desarrollar habilidades de búsqueda. También se ofrecen actividades culturales y talleres educativos para fomentar la cultura y el aprendizaje continuo en un ambiente accesible y acogedor.</p><br>
        </article>
        <!-- Servicios en tarjetas -->
        <div class="services-grid">
            <div class="service-card" id="t1">
                <h3>Préstamo de Libros</h3>
                <p>Ofrecemos un sistema de préstamo para que puedas llevarte tus libros favoritos a casa.</p>
            </div>
            <div id="i1">
                <img src="imagenes/prestamos.jpg" alt="Imagen de prestamos" id="img_1" class="imagenes">
            </div>
            <div class="service-card" id="t2">
                <h3>Zona de Estudio</h3>
                <p>Espacios tranquilos y cómodos para que puedas concentrarte en tus estudios o trabajo.</p>
            </div>
            <div id="i2">
                <img src="imagenes/zona_estudios.jpg" alt="Imagen de zona de estudios" id="img_2" class="imagenes">
            </div>
            <div id="i3">
                <img src="imagenes/wifi.jpg" alt="Imagen de acceso al wifi" id="img_3" class="imagenes">
            </div>
            <div class="service-card" id="t3">
                <h3>Acceso a Internet</h3>
                <p>Conéctate a nuestro Wi-Fi gratuito o usa las computadoras disponibles para tus investigaciones.</p>
            </div>
            <div id="i4">
                <img src="imagenes/asesoria.jpg" alt="Imagen de asesoria de investigacion" id="img_4" class="imagenes">
            </div>
            <div class="service-card" id="t4">
                <h3>Asesoría en Investigación</h3>
                <p>Recibe ayuda del personal de la biblioteca para acceder a recursos y guías de investigación.</p>
            </div>
            <div class="service-card" id="t5">
                <h3>Actividades y Talleres</h3>
                <p>Participa en nuestras actividades culturales, talleres de lectura y eventos educativos.</p>
            </div>
            <div id="i5">
                <img src="imagenes/actividades_talleres.jpg" alt="Imagen de actividades y asesorias" id="img_5" class="imagenes">
            </div>
            <div class="service-card" id="t6">
                <h3>Acceso a Libros Digitales</h3>
                <p>Accede a una gran variedad de libros electrónicos a través de nuestra plataforma digital.</p>
            </div>
            <div id="i6">
                <img src="imagenes/libro_digitales.jpg" alt="Imagen de acceso a libros digitales" id="img_6" class="imagenes">
            </div>
        </div>
        <div class="juego" onclick="juego()">
            🎮Juega aquí
        </div>
    </div>
    <!-- Pie de Página -->
    <footer>
        <section class="final">
            <nav>
                <ul>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Tik tok</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </nav>
            <br><br><a id="aviso_legal" href="http://127.0.0.1:5500/Servicios/service.php#aviso_legal">AVISO LEGAL</a>
            <p>&copy; Pagina creada por D4RK 3NT3RPR1S3 para el ayuntamiento de Muskiz</p>
        </section>
    </footer>
</body>
</html>