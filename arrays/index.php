<?php

/** ARRAYS */

$arrayUno = array("Diego", "Henry", "Sandra", "Lizzeth", "Ales");

$arrayDos[0] = "Diego";
$arrayDos[1] = "Diego";
$arrayDos[2] = "Diego";
$arrayDos[3] = "Diego";
$arrayDos[4] = "Diego";

echo $arrayUno[0] . "<br>";
echo $arrayUno[1] . "<br>";
echo $arrayUno[2] . "<br>";
echo $arrayUno[3] . "<br>";
echo $arrayUno[4] . "<br>" . "<br>";

$arrayUno = array("Matemáticas", "Diego", 4214, "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09", "Matemáticas", "Diego", 4214, "2023-12-09",);

echo "Tamaño del Array: " . count($arrayUno) . "<br>" . "<br>";

//Para recorrer el Array se utiliza for o foreach

$arrayUno = array("Matematicas", "Fisica", "Ingles", "Estadistica");

echo "Usando un ciclo for: <br>";

for ($i=0; $i < count($arrayUno) ; $i++) { 
    echo $arrayUno[$i] . "<br>";
}

echo "<br>";

$arrayUno = array("Matematicas", "Fisica", "Ingles", "Estadistica");

echo "Usando un ciclo foreach: <br>";

foreach ($arrayUno as $dato) {
    echo $dato . "<br>";
}

echo "<br>";

$personas = array("Diego", "Henry", "Sandra", "Lizzeth", "Ales");

foreach ($personas as $persona) {
    echo $persona . "<br>";
}

echo "<br>";

//Array vacio

$personas = array();

foreach ($personas as $presona) {
    echo $persona . "<br>";
}

echo "Fin" . "<br>" . "<br>";

//Controlar el array vacio

$personas = array();

if ($personas !=null) {
    echo "El array tiene datos <br>";
    foreach ($personas as $persona) {
        echo $persona . "<br>";
    }
}
else {
    echo "Ooops el array esta vacío";
}

echo "<br>" . "<br>";

$personas = array("Diego", "Henry", "Sandra", "Lizzeth", "Ales");

if ($personas !=null) {
    echo "El array tiene datos <br>";
    foreach ($personas as $persona) {
        echo $persona . "<br>";
    }
}
else {
    echo "Ooops el array esta vacío";
}

echo "<br>" . "<br>";



