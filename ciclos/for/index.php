<?php

/** CICLO FOR */

//Tiene un valor inicial, una condicion y un valor final

for ($i=0; $i < 10 ; $i++) { 
    echo $i;
}

// $i = 0 : Valor de inicio
// $i < 10 : Condicional - Valor de parada
// $++ : Valor de incremento de 1 en 1

echo "<h4>Desarrollar un programa que muestre los numeros entre 0 y 20 de forma ascendente</h4>";

for ($i=0; $i <=20 ; $i+= 2) { 
    echo $i . " ";
}

echo "<h4>Desarrollar un programa que muestre los numeros entre 0 y 20 de forma ascendente</h4>";

for ($i=20; $i >=0 ; $i-= 2) { 
    echo $i . " ";
}

echo "<h4>Desarrollar un programa que permita contar cuantos numeros entre 1 y 1000 son multiplos de 7</h4>";

$multiplos = 0;

for ($i=1; $i <=1000; $i++) { 
    if ($i % 7 == 0) {
        $multiplos++;
    }
}

echo "La cantidad de multiplos de 7 es: " . $multiplos;

//Ciclo dentro de otro ciclo

echo "<h4>Desarrollar un programa que imprima las tablas de multiplicar del 1 al 10 con su respectivo resultado</h4>";

for ($i=0; $i <= 10 ; $i++) { 
    echo "Tabla de multiplicar del " . $i . "<br>";
    for ($x=1; $x <=10; $x++) { 
        echo $i . " * " . $x . " = " . $i * $x . "<br>";
    }
}
