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


echo "<h4>1. Almacene en un array los 10 primeros numeros pares</h4>";

$arrayPares = array();

for ($i=1; $i <=10 ; $i++) { 
    $arrayPares[] = 2 * $i;
}

foreach ($arrayPares as $par) {
    echo $par . "\n";
}

echo "<h4>2. Impresion usando foreach</h4>";

$arrayName[4] = 80;
$arrayName[9] = "Hola";
$arrayName[22] = 99;
$arrayName[156] = "Mundo";

$arrayName = array(80, "Hola", 99, "Mundo");

foreach ($arrayName as $dato) {
    echo $dato . "<br>" . "<br>";
}

// Imprimir los valores del array usando foreach
foreach ($arrayName as $indice => $valor) {
    echo "Índice: $indice, Valor: $valor " . "<br>";
}

echo "<h4>3. Crear un array asociativo</h4>";

echo '<p>"Nombre: Juan Orozco",
"Direccion: Carrera 48 A #22",
"Telefono: 3215489621",
</p>';

$datos = array('Nombre' => "Juan Orozco", "Direccion" => "Carrera 48 A #22", "Telefono" => 3215489621);

foreach ($datos as $key => $value) {
    echo $key . " : ". $value . "\n" . "<br>";
}

echo "<h4>4. Programa con 3 arrays: Pares, impares y suma</h4>";

// Definir la longitud del array
$longitud_array = 3;

// Inicializar el array con subarrays vacíos
$programa = array(
    array(),
    array(),
    array()
);

/** PRIMER SUBARRAY */

// Llenar solo el primer subarray con números aleatorios pares entre 0 y 100
for ($i = 0; $i < 10; $i++) {
    // Generar un número aleatorio entre 0 y 50 y multiplicarlo por 2 para obtener un número par
    $numero_par = rand(0, 50) * 2;
    
    // Agregar el número par al primer subarray
    $programa[0][] = $numero_par;
}

// Imprimir el primer subarray usando foreach
echo "Números aleatorios pares entre 0 y 100 (solo el primer subarray):\n";
foreach ($programa[0] as $numero) {
    echo "$numero\n";
}

echo "<br>" . "<br>";

/** SEGUNDO SUBARRAY */

// Llenar solo el segundo subarray con números aleatorios impares entre 0 y 50
for ($i = 0; $i < 10; $i++) {
    // Generar un número aleatorio entre 0 y 50 y multiplicarlo por 2+1 para obtener un número impar
    $numero_impar = rand(0, 25) * 2 + 1;
    
    // Agregar el número par al primer subarray
    $programa[1][] = $numero_impar;
}

// Imprimir el primer subarray usando foreach
echo "Números aleatorios impares entre 0 y 50 (solo el segundo subarray):\n";
foreach ($programa[1] as $numero) {
    echo "$numero\n";
}

echo "<br>" . "<br>";

/** TERCER SUBARRAY */
// Llenar el tercer subarray con la suma de los valores correspondientes del primer y segundo subarray
for ($i = 0; $i < 10; $i++) {
    $suma = $programa[0][$i] + $programa[1][$i];
    $programa[2][] = $suma;
}

// Imprimir el tercer subarray usando foreach
echo "Suma de los valores correspondientes del primer y segundo subarray:\n";
foreach ($programa[2] as $suma) {
    echo "$suma\n";
}

echo "<h4>5. Desarrollar un programa que dado un array de numeros enteros entre 0 - 50, hallar el numero mayor almacenado</h4>";

// Definir un array de números enteros entre 0 y 50
$array_numeros = array(12, 45, 6, 30, 8, 22, 50, 18, 5, 42);

// Encontrar el número mayor en el array
$numero_mayor = max($array_numeros);

// Imprimir el resultado

foreach ($array_numeros as $number) {
    echo "$number\n";
}

echo "El número mayor en el array es: $numero_mayor\n";

echo "<h4>6. Desarrollar un programa que dado un array tipo float permita almacenar el peso de 5 personas</h4>";

// Inicializar un array para almacenar el peso de 5 personas
$array_peso = array();

// Llenar el array con el peso de cada persona
for ($i = 1; $i <= 5; $i++) {
    // Generar un peso aleatorio entre 50 y 100 (puedes ajustar el rango según tus necesidades)
    $peso_persona = rand(50, 100) + (rand(0, 9) / 10); // Se agrega un decimal aleatorio para simular pesos más precisos
    $array_peso[] = $peso_persona;
}

// Imprimir el array con el peso de cada persona
echo "Pesos de las 5 personas:\n" . "<br>";
foreach ($array_peso as $indice => $peso) {
    echo "Persona " . ($indice + 1) . ": " . $peso . " kg\n" . "<br>";
}

// Calcular el promedio del peso
$promedio_peso = array_sum($array_peso) / count($array_peso);

// Imprimir el promedio del peso
echo "\nPromedio del peso de las 5 personas: " . $promedio_peso . " kg\n";

// Determinar cuántas personas superan el promedio del peso
$personas_que_superan = 0;
foreach ($array_peso as $peso) {
    if ($peso > $promedio_peso) {
        $personas_que_superan++;
    }
}

// Imprimir el resultado
echo "<br> \nNúmero de personas que superan el promedio del peso: " . $personas_que_superan . "\n";

// Determinar cuántas personas tienen un peso inferior al promedio
$personas_que_inferiores = 0;
foreach ($array_peso as $peso) {
    if ($peso < $promedio_peso) {
        $personas_que_inferiores++;
    }
}

// Imprimir el resultado
echo "<br> \nNúmero de personas con peso inferior al promedio: " . $personas_que_inferiores . "\n";

echo "<h4>7. Programa estudiantes Grupo A y Grupo B</h4>";

$grupoA = array(
    array('nombre' => "Juan Orozco", "nota" => 15),
    array('nombre' => "Pepe Palotes", "nota" => 20),
    array('nombre' => "Julia Putis", "nota" => 18),
    array('nombre' => "Adrian Verchis", "nota" => 18),
    array('nombre' => "Coco Pelado", "nota" => 20),
    array('nombre' => "Chela Pinta", "nota" => 5),
    array('nombre' => "Chispa Bravo", "nota" => 16),
    array('nombre' => "Juan Perenzeco", "nota" => 17),
    array('nombre' => "Jose de la Mara", "nota" => 10),
    array('nombre' => "Juan Tortola", "nota" => 12),
);

echo "Grupo A:\n";
foreach ($grupoA as $estudiante) {
    echo "Nombre: " . $estudiante["nombre"] . ", Nota: " . $estudiante["nota"] . "\n" . "<br>";
}

echo "<br>";

$grupoB = array(
    array('nombre' => "Juan Habichuelas", "nota" => 17),
    array('nombre' => "Pinocho", "nota" => 20),
    array('nombre' => "Cenizo Galan", "nota" => 16),
    array('nombre' => "Pepito de los Cachos", "nota" => 8),
    array('nombre' => "Bella Durmiente", "nota" => 19),
    array('nombre' => "Blanca Nieves", "nota" => 19),
    array('nombre' => "Rapunsell Trensa", "nota" => 18),
    array('nombre' => "Gepeto Madera", "nota" => 19),
    array('nombre' => "Shreck Ogro", "nota" => 19),
    array('nombre' => "Gato con Botas", "nota" => 19),
);

echo "Grupo B:\n";
foreach ($grupoB as $estudiante) {
    echo "Nombre: " . $estudiante["nombre"] . ", Nota: " . $estudiante["nota"] . "\n" . "<br>";
}

echo "<br>";

$notasA = array_column($grupoA, 'nota'); // Obtener todas las notas del grupo A
$promedioA = array_sum($notasA) / count($notasA);
echo "El promedio del grupo A es: " . $promedioA;

echo "<br>";

$notasB = array_column($grupoB, 'nota'); // Obtener todas las notas del grupo B
$promedioB = array_sum($notasB) / count($notasB);
echo "El promedio del grupo B es: " . $promedioB;

echo "<br>";

$promedioG = (array_sum($notasA) + array_sum($notasB)) / (count($notasA) + count($notasB));
echo "El promedio general de A y B es: " . $promedioG;

echo "<br>";

if ($promedioA > $promedioB) {
    echo "El mejor promedio es el Grupo A: " . $promedioA;
} else {
    echo "El mejor promedio es el Grupo B: " . $promedioB;
}

echo "<h4>8. Array con las letras de Colombia</h4>";

$palabra = "Colombia";
$tamano = strlen($palabra); // Obtenemos el tamaño de la palabra

// Inicializamos un array vacío con el tamaño de la palabra
$array_caracteres = array_fill(0, $tamano, '');

// Dividimos la palabra en caracteres y los almacenamos en el array
for ($i = 0; $i < $tamano; $i++) {
    $array_caracteres[$i] = $palabra[$i];
}

// Imprimimos el array resultante
print_r($array_caracteres);