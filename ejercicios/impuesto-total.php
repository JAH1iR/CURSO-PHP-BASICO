<?php
//ejercicio 3 en este ejercicio se aplican los conocimientos de variables, arreglos, operaciones matematicas, concatenacion de cadenas de texto con variables y operadores ternarios, ademas de la definicion de constantes.
define("imPUESTO", 0.10);
$productos = [
    [
        "nombre" => "Producto 1",
        "precio" => 100,
        "cantidad" => 5
    ],

    [
        "nombre" => "Producto 2",
        "precio" => 15,
        "cantidad" => 3
    ],
    [
        "nombre" => "Producto 3",
        "precio" => 7,
        "cantidad" => 8
    ]
];
$cuenta = $productos[0]["precio"]+$productos[1]["precio"]* imPUESTO ;
$total = $cuenta > 100 // es caro
? "El producto es caro, el total es: $cuenta"
: "El producto es barato, el total es: $cuenta";
echo $total;
echo "<br>";
?>
<a href="http://localhost/curso-PHP/">pagina principal</a>