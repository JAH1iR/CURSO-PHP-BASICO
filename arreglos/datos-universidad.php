<?php
// ejemplo de completo para cerrar los tema de los arreglos y sus tipos 
//voy hacer un programa que que guarde datos de universidadd

define("UNIVERSIDAD","tecnologica de panama");// constante que contiene el nombre de la universidad



$estudiante = array ( //arreglo personalizado (asociativo) con clave y valor
    "nombre" => "Eric",
    "apellido" => "Bocanegra",
    "edad" => 22,
    "carrera" => "software"
);
$materias = array ( //arreglo indexado con indice en 0 hacia adelante
    "software",
    "bases de datos",
    "interfaces",
    "estructura de datos"
);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>utp</title>
</head>
<body>
    <header>
        <h1><?= UNIVERSIDAD ?></h1>
    </header>

    <h2>datos del estudiante</h2>

       <div>
         <ul>
            <li>nombre <?= $estudiante["nombre"] ?></li>
            <li>apellido <?= $estudiante["apellido"] ?></li>
            <li>edad <?= $estudiante["edad"] ?></li>
            <li>carrera <?= $estudiante["carrera"] ?></li>
        </ul>
        <h3>materias que estoy cursando</h3>
        <ul>
            <li>la primera materia es <?= $materias[0] ?></li>
            <li>la segunda materia es <?= $materias[1] ?></li>
            <li>la tercera materia es <?= $materias[2] ?></li>
            <li>la cuarta materia es <?= $materias[3] ?></li>
        </ul>
 
       </div>
   
   <br><a href="/CURSO BASICO/index.php> Volver al menú</a>
</body>
</html>