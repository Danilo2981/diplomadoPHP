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

