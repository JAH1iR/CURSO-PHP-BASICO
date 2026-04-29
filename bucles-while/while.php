<?php
//http://localhost/curso-PHP/bucles-while/while.php
$aumento = 1;
while ($aumento <= 10 ){ //En los ciclos, lo que está dentro del paréntesis ($aumento <= 10) se le llama técnicamente Condición de Parada.

    echo $aumento."<br>"; //concatenamos para haya un salto de liniea y se vea hacia abajo
    $aumento++; //El $aumento++ es el motor Si lo quitas $aumento siempre valdría 1 la condición 1 <= 10 siempre sería verdad, y tendrías el famoso bucle infinito.
}
echo "resto de codigo";
?>