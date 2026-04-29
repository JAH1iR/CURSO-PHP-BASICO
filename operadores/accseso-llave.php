<?php 
$datos = array ( //arreglo personalizado (asociativo) con clave y valor
    "nombre" => "aric",
);
$nombre_sesion = $datos["nombre"]; //acceso a un valor del arreglo asociativo
$ADMINISTRADOR = "Eric";

$acceso = ($nombre_sesion === $ADMINISTRADOR)
? " ya está registrado" 
: "no está registrado, por favor registrese";
?>
<H1><?= $acceso;?></H1>