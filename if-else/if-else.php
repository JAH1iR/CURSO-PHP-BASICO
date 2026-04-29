<?php
// este es un programa que muestra el uso de if-else en php, el programa va a mostrar un mensaje dependiendo del valor de una variable, en este caso vamos a usar una variable llamada $edad, si la edad es mayor o igual a 18, el programa va a mostrar un mensaje diciendo que la persona es mayor de edad, si la edad es menor a 18, el programa va a mostrar un mensaje diciendo que la persona es menor de edad

$edad = 20; // variable que contiene la edad de la persona
if ($edad >= 18) { // si la edad es mayor o igual a 18
    echo "la persona es mayor de edad"; // mostrar mensaje de mayor de edad
} else { // si la edad es menor a 18
    echo "la persona es menor de edad"; // mostrar mensaje de menor de edad
}
// dentro de los () se pone la condicion y {} se pone el bloque de codigo que se va a ejecutar si la condicion es verdadera, en este caso el bloque de codigo es el mensaje que se va a mostrar, si la condicion es falsa, se ejecuta el bloque de codigo que esta dentro del else, en este caso el mensaje de menor de edad

// si una condicion es verdadera puede ignorar el bloque de codigo del else, pero si la condicion es falsa, el bloque de codigo del else se ejecuta, por eso es importante tener un bloque de codigo en el else para manejar los casos en los que la condicion es falsa
echo "<br>"; // salto de linea en html
?>
<a href="http://localhost/curso-PHP/">pagina principal</a>