<?php

$saldo = 100; 


while ($saldo > 0) {
    
    
    $saldo -= 20;// este operador le restamos y asignamos a la variable principal
    

    
    echo "Retirando $20. Saldo restante: $" . $saldo . "<br>";

}


echo "Cuenta en cero. Por favor, retire su tarjeta.";
?>
