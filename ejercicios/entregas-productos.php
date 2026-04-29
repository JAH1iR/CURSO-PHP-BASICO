<?php
// Practica 2: esta trata sobre la aplicacion de los conocimientos adquiridos en el curso, en este caso se aplican los conocimientos de variables, arreglos, operaciones matematicas, concatenacion de cadenas de texto con variables y operadores ternarios, ademas de la definicion de constantes.
define("BONO_RIESO",50.00);
$entrgas = [
    [
        "origen" => "Panama",
        "destino" => "David",
        "distancia_km" => 450,
        "pago_por_km"  => 1.50,
        "es_fragil" => true
    ],
    [
        "origen" => "Panama",
        "destino" => "Santiago",
        "distancia_km" => 300,
        "pago_por_km"  => 1.20,
        "es_fragil" => false
    ],
    [
        "origen" => "Panama",
        "destino" => "capira",
        "distancia_km" => 200,
        "pago_por_km"  => 1.00,
        "es_fragil" => true
    ]

];
// 1. Calculamos primero el pago base y lo guardamos en una variable
$pago_base = $entrgas[2]["distancia_km"] * $entrgas[2]["pago_por_km"];

// 2. Calculamos el extra con el ternario
$extra = ($entrgas[2]["es_fragil"] === true) ? BONO_RIESO : 0;

// 3. Sumamos todo (Base + Extra)
$total_pagar = $pago_base + $extra;

// 4. Imprimimos todo usando el mismo índice [2]
echo "El flete desde " . $entrgas[2]["origen"] . " hasta " . $entrgas[2]["destino"] . " tiene un costo total de $" . $total_pagar;
?>