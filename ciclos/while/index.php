<?php

/** CICLOS WHILE */

//No tienen valor inicial ni pare, se debe iterar en un mismo segmento de codigo
//while (condition is true). Poner el pare cuando la condicion sea falsa

$x = true;

while ($x)
{
    echo "Ciclo mientras <br> <br>";
    $x = false;
}

$x = 1;

while ($x <= 10)
{
    echo $x;
    $x++;
}

echo "<h4>1. Desarrolle un programa que invierta la palabra Programacion</h4>";

$palabra = "Programacion";
$longitud = strlen($palabra);
$palabra_invertida = '';

// Invierte la palabra utilizando un bucle while
$i = $longitud - 1;
while ($i >= 0) {
    $palabra_invertida .= $palabra[$i];
    $i--;
}

// Muestra la palabra invertida
echo "Palabra original: $palabra\n" . "<br>";
echo "Palabra invertida: $palabra_invertida\n";

echo "<h4>2. Determine si una palabra establecida es o no palindroma</h4>";

function esPalindromo($palabra) {
    // Elimina espacios y convierte a minúsculas para hacer la comparación sin importar mayúsculas/minúsculas
    $palabra = strtolower(str_replace(' ', '', $palabra));

    // Inicializa variables
    $longitud = strlen($palabra);
    $i = 0;
    $esPalindromo = true;

    // Verifica si la palabra es un palíndromo usando un bucle while
    while ($i < $longitud / 2 && $esPalindromo) {
        if ($palabra[$i] != $palabra[$longitud - $i - 1]) {
            $esPalindromo = false;
        }
        $i++;
    }

    return $esPalindromo;
}

// Palabra establecida
$palabra = "reconocer";

// Verifica si la palabra es un palíndromo
if (esPalindromo($palabra)) {
    echo "$palabra es un palíndromo.";
} else {
    echo "$palabra no es un palíndromo.";
}

echo "<h4>3. Desarrolle un programa que continue la serie 11 - 22 -33 - 44, debe mostrar los 25 primeros valores</h4>";

// Inicializa el primer valor de la serie
$valor = 11;

// Muestra los primeros 25 valores de la serie
for ($i = 1; $i <= 25; $i++) {
    echo "$valor ";

    // Añade 11 para obtener el próximo valor
    $valor += 11;
}

echo "<h4>4. Ejemplo complejo usando While</h4>";

// Inicializa variables
$suma_cuadrados = 0;
$numero = 1;

// Calcula la suma de los cuadrados hasta que sea mayor que 1000
while ($suma_cuadrados <= 1000) {
    $cuadrado = $numero * $numero;
    $suma_cuadrados += $cuadrado;

    echo "Número: $numero, Cuadrado: $cuadrado, Suma: $suma_cuadrados\n" . "<br>";

    $numero++;
}