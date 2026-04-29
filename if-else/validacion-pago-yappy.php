<?php
//ejercicio basico de condicionales anidadas 
$pago_recibido = true; //variables

$monto = 120;

$metodo = "yappy";

//validacion con condicionales anidadas esta es la practica final
if ($pago_recibido === true){
    if ($monto > 100) {
        if ($metodo === "yappy"){
            echo "Compra exitosa con Yappy y cashback aplicado";
        }
         else {
            echo "Compra exitosa, pero sin beneficio de cashback";
        } 
     } 
    else  {
        echo "Compra aprobada";
    }
  
   
} else { //else del primer if 
    echo "Error 402: Pago no procesado";
}

  
?>