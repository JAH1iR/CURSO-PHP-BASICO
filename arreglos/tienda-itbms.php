<?php
// esta 5 pratica es sobre arreglos multidimensionales con [],

define ("IITBMS", 0.07);// CONSTANTE DE IMPUESTO

$i_celulares = [ //esta es la forma mas profesional de crear un arreglo multidimensional, ya que es mas facil de leer y entender, ademas de que es mas facil de modificar, ya que cada elemento del arreglo es un arreglo asociativo, lo que hace que sea mas facil de acceder a los datos, ademas de que es mas facil de modificar, ya que cada elemento del arreglo es un arreglo asociativo, lo que hace que sea mas facil de acceder a los datos
    [
    "celular" => "Sansung",
    "modelo" => ["S21", "S22", "S23"],
    "precio" => [ 250 ,  350 ,   450 ],
    ],

    [
    "celular" => "XIAOMI",
    "modelo" => ["redmi", "note13", "poco"],
    "precio" => [ 150 ,  250 ,   550 ],
    ],

     [
    "celular" => "iphone",
    "modelo" => ["iphone 14", "iphone 12", "iphone 16"],
    "precio" => [ 250 ,  350 ,   750 ],
    ],
];
$precio_final = $i_celulares[2]["precio"][2];
$precio_final += $precio_final * IITBMS;

echo "Marca: {$i_celulares[2]['celular']}
<br>";
echo "Modelo: {$i_celulares[2]['modelo'][2]} 
<br>";
echo "Precio final: {$precio_final}$";
?>