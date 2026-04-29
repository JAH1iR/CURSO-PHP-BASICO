<?php 
// ESTA PRACTICA ES PARA APLICAR LOS CONOCIMIENTOS DE LOS ARREGLOS, EN ESTE CASO VAMOS A CREAR UN PROGRAMA QUE GUARDE DATOS DE UN CELULAR, EL PROGRAMA VA A MOSTRAR LA MARCA Y EL PRECIO DEL CELULAR, PARA ESTO VAMOS A USAR UN ARREGLO PERSONALIZADO O ASOCIATIVO, YA QUE LOS DATOS SON DIFERENTES Y NO SON COSAS IGUALES, LO MEJOR ES USAR ESTE TIPO DE ARREGLO CUANDO EL CONTENIDO ES DIFERENTE O SON COSAS DIFERENTES
$celulares = [
    "marca" => "samsung",
    "modelo" => "galaxy s24",
    "memoria" => "128gb",
    "ram" => "8gb",
    "precio"=> 450,
    "color" => "blanco"];
echo " el celular es de la marca " , $celulares["marca"] . " y el precio es : ", $celulares["precio"]."$";
?>