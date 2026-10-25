<?php
$archivo = "datos/registro_privado_8492.txt";

if (file_exists($archivo)) {
    echo "<h1>Registros Guardados:</h1>";
    echo "<pre>" . htmlspecialchars(file_get_contents($archivo)) . "</pre>";
} else {
    echo "El archivo de registros aún no se ha creado o está vacío. ¡Haz una prueba de login primero!";
}
?>
