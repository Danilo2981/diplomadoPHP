<?php

echo "<h2>Operadores de Comparación</h2>";

echo "<h3>Operador de Igualdad</h3>";
echo "<p>Toma ambos valores o variables y compara que sean iguales.</p>";

echo "<p>Operador de igualdad ==.</p>";

echo "<h4>Caso verdadero</h4>";

echo "<p>numero1 = 7941;
numero2 = 7941;</p>";

$numero1 = 7941;
$numero2 = 7941;

$resultado = $numero1 == $numero2;

echo $resultado;
echo " verdadero es igual a 1";

echo "<br>";

var_dump($numero1 == $numero2);

echo "<h4>Caso falso</h4>";

echo "<p>numero1 = 79241;
numero2 = 7941;</p>";

$numero1 = 79241;
$numero2 = 7941;

$resultado = $numero1 == $numero2;

echo $resultado;
echo " falso es igual a vacío";

echo "<br>";

var_dump($numero1 == $numero2);


echo "<h3>Operador de Identidad</h3>";
echo "<p>Toma ambos valores o variables y compara que sean iguales y también compara que sus tipos sean iguales.</p>";

echo "<p>Operador de identidad ===.</p>";

echo "<h4>Caso verdadero, comparación de dos strings '297'</h4>";

echo "<p>numero1 = '297';
numero2 = '297';</p>";

$numero1 = '297';
$numero2 = '297';

$resultado = $numero1 === $numero2;

echo $resultado;
echo " verdadero es igual a 1";

echo "<br>";

var_dump($resultado);

echo "<h4>Caso falso, comparación entre un sting '297' y un int 297</h4>";

echo "<p>numero1 = '297';
numero2 = 297;</p>";

$numero1 = '297';
$numero2 = 297;

$resultado = $numero1 === $numero2;

echo $resultado;
echo " falso es igual a vacío";

echo "<br>";

var_dump($resultado);


echo "<h3>Operador de Diferencia</h3>";
echo "<p>Toma ambos valores o variables y compara que sean diferentes.</p>";

echo "<p>Operador de diferencia <> y != </p>";

echo "<h4>Caso verdadero</h4>";

echo "<p>numero1 = 24;
numero2 = 1990;</p>";

$numero1 = 24;
$numero2 = 1990;

$resultado = $numero1 != $numero2;

echo $resultado;
echo " verdadero es igual a 1";

echo "<br>";

var_dump($resultado);

echo "<h4>Caso falso</h4>";

echo "<p>numero1 = 2458;
numero2 = 2458;</p>";

$numero1 = 2458;
$numero2 = 2458;

$resultado = $numero1 != $numero2;

echo $resultado;
echo " falso es igual a vacío";

echo "<br>";

var_dump($resultado);


echo "<h3>Operador no Identico</h3>";
echo "<p>Toma ambos valores o variables y compara que sean diferentes en valor y tipo.</p>";

echo "<p>Operador no identico !== </p>";

echo "<h4>Caso verdadero, comparación entre un string y un integer.</h4>";

echo "<p>numero1 = '8652';
numero2 = 8652;</p>";

$numero1 = '8652';
$numero2 = 8652;

$resultado = $numero1 !== $numero2;

echo $resultado;
echo " verdadero es igual a 1";

echo "<br>";

var_dump($resultado);

echo "<h4>Caso falso, entre dos integers</h4>";

echo "<p>numero1 = 58;
numero2 = 58;</p>";

$numero1 = 58;
$numero2 = 58;

$resultado = $numero1 !== $numero2;

echo $resultado;
echo " falso es igual a vacío";

echo "<br>";

var_dump($resultado);


echo "<h3>Operador mayor que</h3>";
echo "<p>Toma ambos valores o variables y compara que el valor o variable de la izquierda sea mayor que el de la derecha.</p>";

echo "<p>Operador mayor que > </p>";

echo "<h4>Caso verdadero.</h4>";

echo "<p>numero1 = 18;
numero2 = 10;</p>";

$numero1 = 18;
$numero2 = 10;

$resultado = $numero1 > $numero2;

echo $resultado;
echo " verdadero es igual a 1";

echo "<br>";

var_dump($resultado);

echo "<h4>Caso falso</h4>";

echo "<p>numero1 = 8;
numero2 = 10;</p>";

$numero1 = 8;
$numero2 = 10;

$resultado = $numero1 > $numero2;

echo $resultado;
echo " falso es igual a vacío";

echo "<br>";

var_dump($resultado);

echo "<h3>Operador menor que</h3>";
echo "<p>Toma ambos valores o variables y compara que el valor o variable de la izquierda sea menor que el de la derecha.</p>";

echo "<p>Operador menor que < </p>";

echo "<h4>Caso verdadero.</h4>";

echo "<p>numero1 = 8;
numero2 = 10;</p>";

$numero1 = 8;
$numero2 = 10;

$resultado = $numero1 < $numero2;

echo $resultado;
echo " verdadero es igual a 1";

echo "<br>";

var_dump($resultado);

echo "<h4>Caso falso</h4>";

echo "<p>numero1 = 18;
numero2 = 10;</p>";

$numero1 = 18;
$numero2 = 10;

$resultado = $numero1 < $numero2;

echo $resultado;
echo " falso es igual a vacío";

echo "<br>";

var_dump($resultado);

echo "<h3>Operador mayor o igual que</h3>";
echo "<p>Toma ambos valores o variables y compara que el valor o variable de la izquierda sea mayor o igual que el de la derecha.</p>";

echo "<p>Operador mayor o igual que >= </p>";

echo "<h4>Caso verdadero.</h4>";

echo "<p>numero1 = 1387;
numero2 = 1387;</p>";

$numero1 = 1387;
$numero2 = 1387;

$resultado = $numero1 >= $numero2;

echo $resultado;
echo " verdadero es igual a 1";

echo "<br>";

var_dump($resultado);

echo "<h4>Caso falso</h4>";

echo "<p>numero1 = 985;
numero2 = 1387;</p>";

$numero1 = 985;
$numero2 = 1387;

$resultado = $numero1 >= $numero2;

echo $resultado;
echo " falso es igual a vacío";

echo "<br>";

var_dump($resultado);

echo "<h3>Operador menor o igual que</h3>";
echo "<p>Toma ambos valores o variables y compara que el valor o variable de la izquierda sea menor o igual que el de la derecha.</p>";

echo "<p>Operador menor o igual que <= </p>";

echo "<h4>Caso verdadero.</h4>";

echo "<p>numero1 = 1387;
numero2 = 1522;</p>";

$numero1 = 1387;
$numero2 = 1522;

$resultado = $numero1 <= $numero2;

echo $resultado;
echo " verdadero es igual a 1";

echo "<br>";

var_dump($resultado);

echo "<h4>Caso falso</h4>";

echo "<p>numero1 = 3641;
numero2 = 2164;</p>";

$numero1 = 3641;
$numero2 = 2164;

$resultado = $numero1 <= $numero2;

echo $resultado;
echo " falso es igual a vacío";

echo "<br>";

var_dump($resultado);