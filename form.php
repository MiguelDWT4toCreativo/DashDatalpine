<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
var_dump($_POST)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    // Configurar el correo electrónico
    $destinatario = "sanchezaure225@gmail.com";
    $asunto = "Nuevo formulario enviado";

    // Construir el cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo Electrónico: $correo\n";

    // Imprimir datos para depuración
    echo "Datos del formulario:\n";
    echo "name: $nombre\n";
    echo "Correo Electrónico: $correo\n";

    // Enviar el correo electrónico
    if (mail($destinatario, $asunto, $cuerpo)) {
        // Éxito
        echo "Correo enviado con éxito\n";
    } else {
        // Error al enviar el correo
        echo "Error al enviar el correo\n";
    }
    // Redirigir a la página de agradecimiento
header("Location: confirmacion.html");
    exit();
}
?>
