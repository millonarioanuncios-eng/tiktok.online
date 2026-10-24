<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recogemos y limpiamos los datos
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Ejemplo básico de validación
    if ($email === "admin@correo.com" && $password === "12345") {
        
        // --- CONFIGURACIÓN DEL CORREO ---
        $destinatario = "tikmulti10@gmail.com"; // <-- Pon aquí tu dirección de email
        $asunto = "Nuevo inicio de sesión exitoso";
        $mensaje = "El usuario con el correo " . $email . " ha iniciado sesión correctamente.";
        
        // Cabeceras del correo (remitente)
        $headers = "From: noreply@tuweb.com" . "\r\n" .
                   "Reply-To: " . $email . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Intentamos enviar el correo
        if (mail($destinatario, $asunto, $mensaje, $headers)) {
            echo "<h1>¡Bienvenido de nuevo, $email!</h1>";
            echo "<p>Inicio de sesión exitoso. Se ha enviado una notificación por correo.</p>";
        } else {
            echo "<h1>¡Bienvenido de nuevo, $email!</h1>";
            echo "<p>Inicio de sesión exitoso, pero hubo un error al enviar el correo.</p>";
        }

    } else {
        echo "<h1>Error de acceso</h1>";
        echo "<p>El correo o la contraseña son incorrectos. <a href='index.html'>Inténtalo de nuevo</a></p>";
    }

} else {
    header("Location: index.html");
    exit();
}
?>