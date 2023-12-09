<?php

if(5 > 3)
{
   echo "5 es mayor que 3 <br> <br>"; 
}

if(5 > 3 && "Diego" == "Diego")
{
    echo "5 es mayor que 2 y Diego es el nombre correcto. <br>  <br>";
}

//Condicionales 1

$p = true;
$q = true;

//P y Q son true por lo cual if es true

if ($p && $q)
{
    echo "P y Q && tienen un valor verdadero <br>";
}

//P o Q son true por lo cual if es true

if ($p || $q)
{
    echo "P o Q || tienen un valor verdadero <br> <br> <br>";
}

//P es true por lo cual if es false, no se muestra echo

if (!$p)
{
    echo "P no es false ! <br>";
}

//Condicionales 2

$p = true;
$q = false;

//P y Q tienen que ser true por lo cual if es false

if ($p && $q)
{
    echo "P es true y Q es false no se cumple && <br>";
}

//P o Q tienen que ser true por lo cual if es true

if ($p || $q)
{
    echo "P es true y Q es false, p hace que se cumpla con valor verdadero <br> <br> <br>";
}

//P es true por lo cual if es false, no se muestra echo

if (!$p)
{
    echo "P no es false ! <br>";
}

//Condicionales 3

$p = false;
$q = true;

//P y Q tienen que ser true por lo cual if es false

if ($p && $q)
{
    echo "P es true y Q es false no se cumple && <br>";
}

//P o Q tienen que ser true por lo cual if es true

if ($p || $q)
{
    echo "P es false y Q es true, p hace que se cumpla con valor verdadero <br>";
}

//P es true por lo cual if es false, no se muestra echo

if (!$p)
{
    echo "P es false ! se cumple <br> <br> <br>";
}

//Condicionales 4

$p = false;
$q = false;

//P y Q tienen que ser true por lo cual if es false

if ($p && $q)
{
    echo "P y Q son false no se cumple && <br>";
}

//P o Q tienen que ser true por lo cual if es true

if ($p || $q)
{
    echo "P y Q son false, no se cumple el valor <br>";
}

//P es true por lo cual if es false, no se muestra echo

if (!$p)
{
    echo "P es false ! se cumple <br> <br> <br>";
}



