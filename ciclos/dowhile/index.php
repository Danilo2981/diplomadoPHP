<?php

do {
    echo "Ciclo do while <br> <br>";
} while (false);

$x = 1;

do {
    echo $x . " ";
    $x++;
} while ($x < 5);

echo "<h4>Desarrollar un programa que imprima los numeros impares entre 1 y 25</h4>";

$x = 1;

while ($x <= 25) {
    if ($x % 2 != 0) {
        echo $x . " ";
    }
    $x++;
}

echo "<h4>Desarrollar un programa que dada una palabra descompone todos sus caracteres</h4>";

$palabra = "DANILO VEGA";
$i=0;

while ($i < strlen($palabra)) {
    echo $palabra[$i] . " ";
    $i++; 
}

echo " tiene " . strlen($palabra) . " caracteres";

echo "<h4>Posicion de las letras</h4>";

$palabra = "DANILO";
$i = 0;

echo "La palabra " . $palabra . " tiene ". strlen($palabra) . " caracteres <br>";

while ($i < strlen($palabra)) {
    echo $palabra[$i] . " en la posicion: ". $i . "<br>";
    $i++;
}

echo "<h4>Desarrollar un programa que genere números aleatorios entre 1 y 50 y se detenga cuado genere un múltiplo de 10</h4>";

$parada = true;
$numero = 0;

while ($parada) {
    $numero = rand(1,50);
    echo $numero . " ";

    if ($numero % 10 == 0) {
        $parada = false;
    }
}

echo "<br>";

$n = 0;
$numero = 0;

while ($n <= 10) {
    $numero = rand(1,20);
    echo $numero . " ";
    $n++;
}