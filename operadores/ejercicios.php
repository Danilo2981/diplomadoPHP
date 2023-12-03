<?php

echo "<h2>Ejercicios con operadores</h2>";

echo "<h3>Ejercicio 1</h3>";

$student = "Pepita Cerezo";

$nota1 = 18.5;
$nota2 = 19.5;
$nota3 = 20.0;
$nota4 = 17.5;
$nota5 = 16.9;

// Calcular el promedio y redondear hacia arriba
$promedio = (($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5);

// Mostrar el resultado
echo "El promedio de $student es: $promedio" . "<br>" . "<br>";

$student = "Pepita Cerezo";
$notas = array(18.5, 19.5, 20.0, 17.5, 16.9);

// Calcular el promedio
$promedio = array_sum($notas) / count($notas);

// Mostrar el resultado
echo "El promedio de $student es: $promedio" . "<br>";

echo "<h3>Ejercicio 2</h3>";

$number1 = 9;
$number2 = 7;

echo "La suma de 9 + 7 es " . $number1 + $number2 . "<br>";
echo "La suma de 9 - 7 es " . $number1 - $number2 . "<br>"; 
echo "La suma de 9 * 7 es " . $number1 * $number2 . "<br>"; 
echo "La suma de 9 / 7 es " . $number1 / $number2 . "<br>"; 

echo "<h3>Ejercicio 3</h3>";

$numeroUno = 8;
$numeroDos = 2;

$cambioUno = &$numeroDos;
$cambioDos = &$numeroUno;

echo $numeroUno . " con la variable auxiliar & cambia a " . $cambioUno . "<br>";
echo $numeroDos . " con la variable auxiliar & cambia a " . $cambioDos . "<br>";


echo "<h3>Ejercicio 4</h3>";

$estado = (5 == 2) || (2 > 1);

echo $estado . "<br>";

var_dump($estado);

echo "<h3>Ejercicio 5</h3>";

$resultado = (9/2)+8*2/1-(2+2);

echo $resultado;

echo "<h3>Ejercicio 6</h3>";

$ladoCuadrado = 8;

echo "El lado del cuadrado es " . $ladoCuadrado . "cm" . "<br>";

$area = $ladoCuadrado * $ladoCuadrado;

echo "El area del cuadrado es " . $area . "cm" . "<br>";

$perimetro = $ladoCuadrado + $ladoCuadrado + $ladoCuadrado + $ladoCuadrado; 

echo "El perimetro del cuadrado es " . $perimetro . "cm" . "<br>" . "<br>";

echo "Los lados de un triangulo son de 8cm, la altura es de 8cm y la base de 9cm" . "<br>";

$baseTriangulo = 9;
$alturaTriangulo = 8;
$ladoUnoTriangulo = 8;
$ladoDosTriangulo = 8;

$areaTriangulo = ($baseTriangulo * $alturaTriangulo) / 2;

echo "El area del triangulo es " . $areaTriangulo . "cm" . "<br>";

$perimetroTriangulo = $baseTriangulo + $ladoUnoTriangulo +$ladoDosTriangulo;

echo "El perimetro del triangulo es " . $perimetroTriangulo . "cm" . "<br>" . "<br>";

echo "La base de un rectangulo es 8cm y la altura 6cm" . "<br>";

$baseRectangulo = 8;
$alturaRectangulo = 6;

$areaRectangulo = $baseRectangulo * $alturaRectangulo;

echo "El area del rectangulo es " . $areaRectangulo . "cm" . "<br>";

$perimetroRectangulo = ($baseRectangulo * 2) + ($alturaRectangulo * 2);

echo "El perimetro del rectangulo es " . $perimetroRectangulo . "cm" . "<br>" . "<br>";

