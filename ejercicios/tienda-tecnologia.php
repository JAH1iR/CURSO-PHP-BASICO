
<?php
//ejercicio practico 1, es programa que simule una tienda de computadoras, con sus productos, precios y descuentos aplicados este ejercicio aplicamos los dos tipos de arreglos y de constantes.

define ("TIENDA","tecno-panama") ;//CONSTANTE > contiene tecno-panama//

$Laptop = [ //arrglo 1 personalizado 
    "marca"=> "DELL",
    "procesador"=> "Nvidea 8i",
    "precio" => "300.00",//php no admite coma en los numeros "300,00" solo con puntos "300.00"
     "ram" => "16 gb" //variable de tipo string con el valor de 16 gb
];

$extras = [//arreglo 2 este es un arreglo indexado con indice en 0 hacia adelante
     "mause",
    "maletin",
    "audifonos", 
]; 
     

$descuento = 50;//variable de descuento
?>

<h1><?= TIENDA ?> </h1>
<ul>
    <li>marca <?= $Laptop ["marca"] ?></li> 
    <li>procesador <?= $Laptop ["procesador"] ?></li>
    <li>memoria ram <?= $Laptop ["ram"] ?></li>
</ul>
<h3>precio original $ <?= $Laptop ["precio"]?></h3>
<p>oferta especial el total es $ <?= $total = $Laptop ["precio"]-$descuento?></p> 
<h3>regalos de tu compras</h3>
<ul>
    <li>el primer regalo <?= $extras[0] ?></li>
    <li>el segundo <?= $extras[1] ?></li>
</ul>
<a href="http://localhost/curso-PHP/".> volver al menu principal </a> 

