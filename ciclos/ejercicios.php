<?php

echo "<h4>1. Desarrolla un programa que permita mostrar el factorial de un numero</h4>";

// Número para el cual se calculará el factorial
$numero_definido = 4; // Puedes cambiar este valor según tus necesidades

// Inicializa el resultado del factorial
$resultado_factorial = 1;

// Calcula el factorial usando un bucle for
for ($i = 1; $i <= $numero_definido; $i++) {
    $resultado_factorial *= $i;
}

// Muestra el resultado
echo "El factorial de $numero_definido es: $resultado_factorial";

echo "<h4>2. Desarrolla un programa que determine los divisores de un numero definido</h4>";

// Número para el cual se determinarán los divisores
$numero_definido = 35; // Puedes cambiar este valor según tus necesidades

// Encuentra los divisores del número definido
echo "Los divisores de $numero_definido son: ";

for ($i = 1; $i <= $numero_definido; $i++) {
    if ($numero_definido % $i == 0) {
        echo $i . " ";
    }
}

echo "<h4>3. Desarrolla un programa que determine si el numero es perfecto</h4>";

// Número para el cual se determinará si es perfecto
$numero_definido = 6; // Puedes cambiar este valor según tus necesidades

// Encuentra los divisores del número definido
$suma_divisores = 0;

for ($i = 1; $i <= $numero_definido / 2; $i++) {
    if ($numero_definido % $i == 0) {
        $suma_divisores += $i;
    }
}

// Determina si el número es perfecto
if ($suma_divisores == $numero_definido) {
    echo "$numero_definido es un número perfecto. La suma de sus divisores $suma_divisores es = a $numero_definido";
} else {
    echo "$numero_definido no es un número perfecto. La suma de sus divisores  $suma_divisores no es = a $numero_definido";
}

echo "<h4>4. Muestra los numeros de pisos y oficinas de un bloque</h4>";

// Número total de pisos y oficinas por piso
$num_pisos = 5;
$num_oficinas_por_piso = 6;

// Genera la lista de pisos y oficinas
for ($piso = 1; $piso <= $num_pisos; $piso++) {
    for ($oficina = 1; $oficina <= $num_oficinas_por_piso; $oficina++) {
        echo "Piso $piso - Oficina $oficina\n" . "<br>" ;
    }
}