<?php
// arreglos multidimensionales son arreglos que contienen otros arreglos, estos arreglos se caracterizan por tener un indice y un valor, el indice es un numero entero y el valor puede ser de cualquier tipo de dato, lo mejor es usar estos arreglos cuando el contenido es diferente o son cosas diferentes.

$data = [ // esta es la forma mas profesional de crear un arreglo multidimensional, ya que es mas facil de leer y entender

    [ // este seria el primer inindice
    "nombre" => "Eric",
    "apellido" => "bocanegra",
    "notas" => [10, 9, 8, 7, 6]
    ],

    [
    "nombre" => "carlos",
    "apellido" => "atencio",
    "notas" => [10, 9, 8, 7, 6]
    ],

     [
    "nombre" => "juan",
    "apellido" => "benitez",
    "notas" => [10, 9, 8, 7, 6]
    ],
];
   echo "mi nombre es " , $data[0]["nombre"] . " y mi apellido es " .  $data[0]["apellido"] . " y mis nota es " .  $data[0]["notas"] [1];
?>