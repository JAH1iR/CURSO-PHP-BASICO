<?php
// 1. Nuestros datos (el arreglo que ya dominas)
$estudiantes = [
    [
        "nombre" => "Eric",
        "esta_activo" => true,
        "indice" => 2.5,
        "sede" => "Panama oeste"
    ],
    [
        "nombre" => "Amanda",
        "esta_activo" => true,
        "indice" => 1.2,
        "sede" => "Panama oeste"
    ],
    [
        "nombre" => "Juan",
        "esta_activo" => false,
        "indice" => 0.5,
        "sede" => "Colon"
    ]
];

// 2. El contador (el "dedo" que apunta a cada estudiante)
$i = 0; 

// 3. El ciclo "Mientras"
while ($i < 3) {
    
    echo "--- Evaluando a: " . $estudiantes[$i]["nombre"] . " ---<br>";

    // CAPA 1: ¿Está activo? (Tu lógica de siempre)
    if ($estudiantes[$i]["esta_activo"] === true) {
        
        // CAPA 2: Revisamos el índice
        if ($estudiantes[$i]["indice"] >= 2.0) {
            echo "Resultado: Tienes derecho a una beca completa.<br>";
        }
        else {
            // CAPA 3: Índice bajo, revisamos la sede
            echo "Resultado: No tienes derecho a beca por índice... ";
            
            if ($estudiantes[$i]["sede"] === "Panama oeste") {
                echo "Pero tienes cupo en las tutorías de la sede.<br>";
            } else {
                echo "Contacta a tu sede para más información.<br>";
            }
        }

    } else {
        // Si no está activo
        echo "Resultado: Cuenta inactiva. Contacte al administrador.<br>";
    }

    echo "<br>"; // Un espacio para que no se vea todo pegado

    // 4. EL PASO MÁS IMPORTANTE: Mover el dedo al siguiente estudiante
    $i++; 
}

echo "Proceso de becas finalizado.";
?>