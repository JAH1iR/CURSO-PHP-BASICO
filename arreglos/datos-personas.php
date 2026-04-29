<?php
// a diferiencia de la practica 3 este arreglo  esta igual de estructurado pero escribimos mas codigo pero asi se entiende la logica

$Datos_usuarios = [//arreglo principal
    [//arreglo dentro de un arreglo este seria el indice 0 del arreglo principal
        "nombre" => "Eric",
        "apellido" => "bocanegra",
        "notas" => [90, 85, 70, 10, 20],
    ],

    [
        "nombre" => "amanda",
        "apellido" => "gonzalez",
        "notas" => [20, 40, 25, 60, 50],
    ],

    [
        "nombre" => "maria",
        "apellido" => "moran",
        "notas" => [10, 50, 70, 60, 90],
    ],
    
    [
        "nombre" => "juan",
        "apellido" => "perez",
        "notas" => [50, 60, 70, 65, 50],
     ],
      
];

echo " mi nombre es: " .  $Datos_usuarios[0]["nombre"] . " y mi apellido es: " . $Datos_usuarios[0]["apellido"] . " y mi nota es: "  .  $Datos_usuarios[0]["notas"] [2];

?>