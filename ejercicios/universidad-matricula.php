<?php
// ejercicio 2 en este ejercicio se aplican los conocimientos de variables, arreglos y operaciones matematicas, ademas de la concatenacion de cadenas de texto con variables.
$inscripcion = 55;
$costo_materia = 2.50;
$cantidad_materias = 4;
$totalpago = ($cantidad_materias + $costo_materia) * $inscripcion;// las sumas van entre parentesis antes de cualquier otra operacion matematica

$CURSO = [
    "nombre_curso" => "DESARROLLO DE SOFRWARE",
    "facultad" => "FACULTAD DE INGENIERIA DE SISTEMAS COMPUTACIONALES",
    "semestre" => "2026-1",
];
$estudiantes =  ["Eric",
"moises",
"Daniel"// el indice 2 es el ultimo elemento del arreglo, el indice 3 no existe en este arreglo, si se intenta acceder a un indice que no existe se genera un error de tipo "undefined index"
];

?>
<!DOCTYPE html>

</head>
<body>
<h1><?= $CURSO["nombre_curso"] . " - " . $CURSO["facultad"] ?></h1>
<h2> el nombre del estudiante: <?= $estudiantes[0] ?>, debe pagar: </h2> 
<h3><?= " un " . $totalpago."$"  ?> por su cantidad de materias</h3>
<a href="http://localhost/curso-PHP/">pagina principal</a>
</body>
</html>