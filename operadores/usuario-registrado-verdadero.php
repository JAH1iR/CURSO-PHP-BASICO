<?php 
$oficial_num = 20;
$falsenum = "20";
$acceso = ($oficial_num === $falsenum)
? "el numero es igual"
: "el numero no es igual";
$USUARIO = "amamda";
$USUARIOREGISTER= TRUE;
$USUARIOREGISTER = $USUARIO === "ERIC" ? "si es registrado" : "por favor registrese";
echo $USUARIOREGISTER;
?>
