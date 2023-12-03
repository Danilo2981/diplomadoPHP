<?php

echo "<h2>Operadores con Cadenas</h2>";

echo "<h3>Operador de Concatenación</h3>";
echo "<p>Permite unir dos cadenas de texto</p>";

echo "<p>texto1 = 'Hola a todos'; . <br>
echo texto1 . ' ¿Como estan?';</p>";

$texto1 = "Hola a todos";

echo $texto1 . ' ¿Como estan?' . "<br>" . "<br>";

echo "<p> echo 'Hola a todos' . '¿Como estan?';</p>";

echo 'Hola a todos' . '¿Como estan?';


echo "<h3>Operador de Concatenación y Asignación</h3>";
echo "<p>Permite unir dos cadenas de texto, en la declaración o redeclaración de una variable</p>";

echo "<p>texto1 = 'Mi nombre es ';
<br>
texto2 = 'Danilo Vega';
<br>
texto1 .= texto2;
<br>
echo texto1</p>";

$texto1 = "Mi nombre es ";
$texto2 = "Danilo Vega ";

$texto1 .= $texto2;

echo $texto1 . "<br>" . "<br>";

echo "<h3>Operador Ternario</h3>";
echo "<p>Permite establecer valores segun una condición</p>";

$numero = 85;

echo "<p>resultado = numero > 50  es la condicion
<br>
? da los valores segun la condicion 
<br>
'El numero es mayor que 50' 
<br>
: da la segunda opcion
<br>
'El numero es menor que 50';</p>";

$resultado = $numero > 50 ? 'El numero es mayor que 50' : 'El numero es menor que 50';

echo "El resultado es:";
echo "<br>";
echo $resultado;