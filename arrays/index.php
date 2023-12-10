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

echo "<br>";


/** ARRAY ASOCIATIVO */

//Se define con una clave definida por el usuario

$edades = array('Diego' => 33, "Andres" => 25, "Juan" => 16);

$edades['Diego'] = 33;
$edades['Andres'] = 25;
$edades['Juan'] = 16;

//Mostrar arrays asociativos

$fechasNacimiento = array('Diego' => '1999-03-12',
                            'Andres' => '2000-01-05',
                            'Juan' => '1997-07-05',);

echo $fechasNacimiento['Diego'] . "</br>";
echo $fechasNacimiento['Andres'] . "</br>";
echo $fechasNacimiento['Juan'] . "</br>" . "</br>";

$notas = array('Diego' => 4.5, 'Juan' => 5, 'Alex' => 4);

echo $notas['Diego'] . "</br>";
echo $notas['Juan'] . "</br>";
echo $notas['Alex'] . "</br>" . "</br>";

// Permiten asociar diferentes tipos
$notas = array('Diego' => 4.5, 'Juan' => "Colombia", 'Alex' => true);

echo $notas['Diego'] . "</br>";
echo $notas['Juan'] . "</br>";
echo $notas['Alex'] . "</br>" . "</br>";

//Los arrays asociativos no pueden ser accedidos por indexes

//Los arrays asociaivos pueden ser de N posiciones

$array = array('Diego' => 0.5, 'A' => 'Colombia', '1' => true,
                'Jose' => 1.5, 'B' => 'Colombia', '2' => true,
                'Año' => 4.5, 'C' => 'Colombia', '3' => true,
                'Felipe' => 2.5, 'D' => 'Colombia', '4' => true,
                'Array' => 5, 'E' => 'Colombia', '5' => true,);

echo "Tamaño del array: " . count($array) . "</br>" . "</br>";;

// Los arrays asociativos no permiten repetir claves en su declaracion

// La clave es opcional. Si no se especifica PHP usa el incremento de tipo int

// En un ciclo

$persona = array("Nombre" => "Diego", "Ciudad" => "Medellin", "Altura" => "172cm");

foreach ($persona as $key => $value) {
    echo $key . " - " . $value . '<br>' . '<br>';
}

/** ARRAYS MULTIDIMENCIONALES */

//Son arrays de arrays, estos pueden contener o no la misma estructura y cantidad de elementos.

$empleados = array
            (
                array('Nombre' => "Diego Palacio",
                        'Edad' => "22",
                        'Genero' => "Masculino"
                    ),
                array('Nombre' => "Diana Edwards",
                    'Edad' => "33",
                    'Genero' => "Femenino"
                ),
                array('Nombre' => "Alex Stevenson",
                        'Edad' => "51",
                        'Genero' => "Masculino",
                    ),
            );

$empleados = array
            (
                array('Nombre' => "Diego Palacio",
                        'Edad' => "22",
                        'Correo' => "diego@gmail.com"
                    ),
                array('Nombre' => "Diana Edwards",
                    'Altura' => "185cm",
                    'Genero' => "Femenino"
                ),
                array('Nombre' => "Alex Stevenson",
                        'Genero' => "Sin identificar",
                    ),
            );

//Se los muestra con el index del array interno y segundo la clave del elemento

echo $empleados[0]['Nombre'] . "<br>";
echo $empleados[2]['Genero'] . "<br>" . "<br>";

//Los arrays multidimencionales de mas de 3 niveles son muy dificiles de administrar
