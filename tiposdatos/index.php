<?php

echo "<h1>TIPOS DE DATOS</h1>";

echo "<h2>String</h2>";

echo "Hola a todos <br>";
echo "Como estan <br> <br>";

$ciudad = "Medellin";
echo $ciudad . "<br>";
var_dump($ciudad);

echo "<h2>Integer (numero no decimal)</h2>";

$numero = 2147483647;
echo $numero . "<br>";
var_dump($numero);

echo "<h2>Float (numero decimal)</h2>";

$numero_decimal = -7.05455;
echo $numero_decimal . "<br>";
var_dump($numero_decimal);

echo "<h2>Boolean (verdadero o falso)</h2>";

var_dump((bool) "");
echo  "<br>";
var_dump((bool) 1);
echo  "<br>";
var_dump((bool) -2);
echo  "<br>";
var_dump((bool) "foo");
echo  "<br>";
var_dump((bool) 2.3e5);
echo  "<br>";
var_dump((bool) array());
echo  "<br>";
var_dump((bool) "false");

echo "<h2>Arrays</h2>";

$ciudades = array("Quito", "Atuntaqui", "Ibarra", "Otavalo", "Cotacachi");
var_dump($ciudades);

echo "<h2>Null</h2>";

$x = "Diego";
var_dump($x . "<br>");

$x = null;
var_dump($x);
