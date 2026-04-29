<?php
define("tienda", "compu center");// constante que contiene el nombre de la tienda
$componentes = [
    "monitor" => "asus",
    "teclado" => "redragon",
    "mouse" => "redragon",
    "tarjeta de video" => "rtx 3060",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda</title>
</head>
<body>
    <h1></h1>
    <h1><?= tienda ?></h1>
    <h2>componentes de mi pc</h2>
    <ul></ul>
        <li>monitor: <?= $componentes["monitor"] ?></li>
        <li>teclado: <?= $componentes["teclado"] ?></li>
        <li>mouse:   <?= $componentes["mouse"] ?></li>
        <li>tarjeta de video: <?= $componentes["tarjeta de video"] ?></li>
</body>
</html>