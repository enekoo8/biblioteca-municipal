// Esperar a que el documento esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    // Capturamos el formulario
    var form = document.querySelector('form');

    // Capturamos el botón de envío
    var boton = document.getElementById('Registrate');

    // Añadimos un listener al clic del botón de registro
    boton.addEventListener('click', function(event) {
        // Obtenemos los valores de las contraseñas
        var contraseña = document.getElementById('Contraseña').value;
        var confirmarContraseña = document.getElementById('Contraseña2').value;

        // Comprobamos si las contraseñas coinciden
        if (contraseña !== confirmarContraseña) {
            // Prevenimos el envío del formulario
            event.preventDefault();
            // Mostramos un mensaje al usuario
            alert('Las contraseñas no coinciden. Por favor, intentalo de nuevo.');
        }
    });
});
