<?php
// esta es la introsuccion a la clase operadores

// 1. OPERADORES DE STRING (Cadenas) y ASIGNACIÓN
$usuario = "eric";
$saludo = "Bienvenido, ";
$mensaje_completo = $saludo . $usuario; // Concatenación con el punto (.)

// 2. OPERADORES ARITMÉTICOS (Matemáticas)
$precio_producto = 100;
$cantidad = 3;
$impuesto = 0.15; // 15%

$subtotal = $precio_producto * $cantidad; // Multiplicación
$total_impuesto = $subtotal * $impuesto;
$total_final = ($subtotal + $total_impuesto); // Suma

// 3. OPERADORES DE ASIGNACIÓN COMBINADA
$puntos_recompensa = 10;
$puntos_recompensa += 5; // Es igual a decir: 10 + 5 (Resultado: 15)

// 4. OPERADORES DE COMPARACIÓN (Devuelven true o false)
$es_mayor_de_edad = 20 >= 18; // true (porque 20 es mayor o igual a 18)
$tiene_descuento = $total_final > 200; // true (porque 345 es mayor a 200)

// 5. OPERADORES LÓGICOS
// ¿Puede comprar? Debe ser mayor de edad Y tener suficiente dinero
$saldo_cuenta = 500;
$puede_comprar = ($es_mayor_de_edad && $saldo_cuenta >= $total_final);

// 6. OPERADOR TERNARIO (El "if" de una sola línea)
$estado_pago = ($puede_comprar) ? "Compra aprobada" : "Saldo insuficiente";

// --- SALIDA DE DATOS (Para ver los resultados) ---
echo "--- RESUMEN DE COMPRA ---" . "\n";
echo "<br>"; // Salto de línea en HTML
echo "Usuario: " . $mensaje_completo . "\n";
echo "<br>";
echo "Subtotal: $" . $subtotal . "\n";
echo "<br>";
echo "Total con impuestos: $" . $total_final . "\n";
echo "<br>";
echo "¿Tiene descuento aplicado?: " . ($tiene_descuento ? "Sí" : "No") . "\n";
echo "<br>";
echo "Estado de la transacción: " . $estado_pago . "\n";
echo "<br>";
echo "Puntos acumulados: " . $puntos_recompensa . "\n";
echo "<br>";
?>
<a href="http://localhost/curso-PHP/">pagina principal</a>