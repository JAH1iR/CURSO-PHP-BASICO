<?php
$PRECIO = 350;
$impuesto = 0.07;
$total = $PRECIO;// uso de una variable para almacenar el precio total, ya que el precio final es el precio mas el impuesto, por lo que se puede usar una variable para almacenar el precio total, y luego sumar el impuesto al precio total, de esta manera se puede calcular el precio final del celular
($total += $PRECIO) * $impuesto;// uso del += para sumar el impuesto al precio total
echo " el precio final del celular es: " . $total . "$";
?>