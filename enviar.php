<?php

    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "alancardenasm9@gmail.com";
    $asunto = "Solicitud de Inscripción en Taller de Verano - Diseños e Ilustraciones";

    $carta = "De: $nombre \n";
    $carta .= "Whatsapp: $telefono \n";
    $carta .= "Correo: $correo \n";
    $carta .= "Mensaje: $mensaje";

    mail($destinatario, $asunto, $carta);
    header("Location:mensaje-enviado.php");
    
?>