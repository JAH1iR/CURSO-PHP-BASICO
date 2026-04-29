<?php
$numeros = array (1,2,3,4,5,6,7,8,9,10);
// este es un arreglo indexado con indice en 0 hacia adelante, el primer valor esta en la posicion 0, el segundo valor esta en la posicion 1, el tercer valor esta en la posicion 2, el cuarto valor esta en la posicion 3, el quinto valor esta en la posicion 4, el sexto valor esta en la posicion 5, el septimo valor esta en la posicion 6, el octavo valor esta en la posicion 7, el noveno valor esta en la posicion 8, el decimo valor esta en la posicion 9
echo " el numero es " , $numeros[3];
echo "<br><a href='index.php'> Volver al menú</a>";


//un ejemblo basico de arrglos personalizados o asociativos, estos arreglos se caracterizan por tener una clave y un valor, la clave es un string y el valor puede ser de cualquier tipo de dato, lo mejor es usar estos arreglos cuando el contenido es diferente o son cosas diferentes
$mismataerias = array ("materia1" => "software",
                       "materia2"  => "bases de datos",
                       "materia3"  => "software 3",
                       "materia4" => "interfaces");
                       
echo "la materia que me toca es :", $mismataerias["materia3"];
echo "<br><a href='index.php'> Volver al menú</a>";

//otra forma de hacer un arreglo seria con []
$nombres = [
    "nombre1" => "eric",
    "nombre2" => "carlos",
    "nombre3" => "juan",
    "nombre4" => "pedro"
];
echo "el nombre es " , $nombres["nombre2"];
?>