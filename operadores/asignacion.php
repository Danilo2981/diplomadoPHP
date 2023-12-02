<?php

echo "<h2>Operadores de Asignación</h2>";

echo "<h4>Asignación simple</h4>";
echo "<p>El operando de la izquierda se establece en el valor de la expresión de la derecha.</p>";

$x = 78;
$y = "Diego";
$z = true;

echo "<p>x = 'Hola';
y = x;
echo x;</p>";

$x = 'Hola';
$y = $x;
echo $x;

echo "<h4>Asignación por Adición</h4>";
echo "<p>Agrega el valor del operando derecho a la variable izquierda y le asgna el resultado.</p>";

echo "<p>x = 78;
x += 7;
echo x;</p>";

$x = 78;
$x += 7;
echo $x;

echo "<p>a = 78;
b = 7;
b += a;
echo b;</p>";

$a = 78;
$b = 7;

$b += $a;

echo $b;

echo "<h4>Asignación por Sustracción</h4>";
echo "<p>Sustrae el valor del operando derecho a la variable izquierda y le asgna el resultado.</p>";

echo "<p>x = 12;
x -= 7;
echo x;</p>";

$x = 12;
$x -= 7;
echo $x;

echo "<p>a = 12;
b = 7;
a -= b;
echo a;</p>";

$a = 12;
$b = 7;

$a -= $b;

echo $a;

echo "<h4>Asignación por Multiplicación</h4>";
echo "<p>Multiplica el valor del operando derecho a la variable izquierda y le asgna el resultado.</p>";

echo "<p>x = 3;
x *= 4;
echo x;</p>";

$x = 3;
$x *= 4;
echo $x;

echo "<p>a = 3;
b = 4;
a *= b;
echo a;</p>";

$a = 3;
$b = 4;

$a *= $b;

echo $a;

echo "<h4>Asignación por División</h4>";
echo "<p>Divide el valor del operando derecho a la variable izquierda y le asgna el resultado.</p>";

echo "<p>x = 9;
x /= 3;
echo x;</p>";

$x = 9;
$x /= 3;
echo $x;

echo "<p>a = 9;
b = 3;
a /= b;
echo a;</p>";

$a = 9;
$b = 3;

$a /= $b;

echo $a;

echo "<h4>Asignación por Módulo</h4>";
echo "<p>Saca el residuo el valor del operando derecho a la variable izquierda y le asgna el resultado.</p>";

echo "<p>x = 10;
x %= 3;
echo x;</p>";

$x = 10;
$x %= 3;
echo $x;

echo "<p>a = 10;
b = 3;
a %= b;
echo a;</p>";

$a = 10;
$b = 3;

$a %= $b;

echo $a;




