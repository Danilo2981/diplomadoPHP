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

echo "<h2>Ejercicios con Cadenas</h2>";

//1.

$nombre = "Diego-Palacio.5;28;41;08";

echo $nombre . "<br>";

//Remplazar -
$nombre_modificado = str_replace(array('-'), ' ', $nombre);

//Remplazar .
$nombre_modificado = str_replace(array('.'), ' ', $nombre_modificado);

//Remplazar ;
$nombre_modificado = str_replace(array(';'), '', $nombre_modificado);

echo $nombre_modificado . "<br>" . "<br>";

//2.

$contraseña = "dav0102";

echo "contraseña:  " . $contraseña . "<br>";

$sha1 = sha1($contraseña);
$md5 = md5($contraseña);

echo "sha1=  " . $sha1 . "<br>";
echo "md5=  " . $md5 . "<br>" . "<br>";

$messaje = "Buenos dias estimados estudiantes. Hoy vamos a aprender PHP";

echo $messaje . "<br>";

$strlen = strlen($messaje);

echo "El largo del mesaje es $strlen" . "<br>" . "<br>";

// 3. 

$name = "diego alejandro palacio valencia";
echo $name . "<br>";

$name_mayusc = strtoupper($name);
echo $name_mayusc . "<br>" . "<br>";

// 3. 

$myname = "DANILO MIGUEL VEGA LOPEZ";
echo $myname . "<br>";

$name_minusc = strtolower($myname);
echo $name_minusc . "<br>" . "<br>";