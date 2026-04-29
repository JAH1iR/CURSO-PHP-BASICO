<?php
//esta practica trata sobre la aplicacion de los conocimientos adquiridos en el curso, en este caso se aplican los conocimientos de variables, arreglos, operaciones matematicas, concatenacion de cadenas de texto con variables y operadores ternarios, ademas de la definicion de constantes.
define("COSTO_CREDITO", 9.00);
$estudiante = [
    [
        "nombre" => "Eric bocanegra",
        "sede" => "panama oeste",
        "materias" => ["Redes" => 4, 
        "Programación"=>5, ]
    ]
];
$total = ($suma=$estudiante[0]["materias"]["Redes"] + $estudiante[0]["materias"]["Programación"]) * COSTO_CREDITO;
$tipo_matricula  = ($suma >= 8) ? "carga completa" : "carga media";
echo "El estudiante " . $estudiante[0]["nombre"] . " de la sede " . $estudiante[0]["sede"] . " tiene un total a pagar de $" . $total . " y su tipo de matrícula es: " . $tipo_matricula;
?>