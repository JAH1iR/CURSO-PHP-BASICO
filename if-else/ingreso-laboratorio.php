<?php
//esta es la priemra practica de condicionales 
$estudiante = [
    [
        "nombre" => "Eric",
        "nivel" => 4,
        "tiene_llave" => false
    ],

    [
        "nombre" => "amanda gomez",
        "nivel" => 2,
        "tiene_llave" => true
    ],

    [
        "nombre" => "juan perez",
        "nivel" => 2,
        "tiene_llave" => false
    ],
];
$admin = "Eric bocanegra"; // Corregimos el nombre para que coincida
$hora = 8;

if ($hora < 6 || $hora > 20) { // 
    echo "Laboratorio cerrado.";
} 
else {
    // ESTO ES ANIDAR: Estamos dentro del bloque de "Laboratorio Abierto"
    
    if ($estudiante[0]["nombre"] === $admin) {
        // Solo si es Eric, entra aquí
        echo "Bienvenido Administrador del sistema: " . $admin;
    } 
    else {
        // Si no es Eric, pero el laboratorio está abierto
        echo "Bienvenido estudiante: " . $estudiante[0]["nombre"];
    }
}
?>

