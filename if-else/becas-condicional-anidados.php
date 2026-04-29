<?php
// esta practica es sobre validacion de becas usando condicionales anidadas
$estudiantes = [
    [
        "nombre" => "Eric bocanegra",
        "indice" => 1.2,
        "esta_activo" => false,
        "sede" => "Panama"
    ],

    [
        "nombre" => "amanda gomez",
        "indice" => 2.2,
        "esta_activo" => true,
        "sede" => "Panama oeste"
    ],

    [
        "nombre" => "juan perez",
        "indice" => 1.0,
        "esta_activo" => false,
        "sede" => "veraguas"
    ]
    ];
    if ($estudiantes[0]["esta_activo"] === true) {
      
        if ($estudiantes[0]["indice"] >= 2.0) {
            echo "tienes derecho a una beca completa";
        }
        elseif ($estudiantes[0]["indice"] >= 1.5) {
            echo "tienes derecho a una beca del 50%";
        }
        else {;
            echo "no tienes derecho a una beca";
        }
    }
    else {;
        echo " cuenta incativa contarctese con el administrador del sistema";
        if ($estudiantes[0]["sede"] === "Panama oeste") {
            echo " no calificas para la beca por tu sede";
        }
        else {
            echo " contactese con el administrador del sistema para mas informacion";
        }
        
    }
?>