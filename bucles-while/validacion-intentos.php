<?php

$intentos = 1; 


while ($intentos <= 5) {
    
    if ($intentos === 5) {
        echo "<strong>Intento 5 de 5: ¡ÚLTIMO INTENTO! Su cuenta será bloqueada.</strong><br>";
    } else {
        echo "Intento numero: " . $intentos . " - Acceso denegado.<br>";
    }

    $intentos++;
}

?>