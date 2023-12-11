<?php

echo "<h4>1. Desarrollar un algoritmo que por medio de un ciclo for de 10 iteraciones, almacenar en un array 10 numeros generados
aleatoriamente entre 0 y 50 y determinar el numero mayor ene el array</h4>";

// Inicializa un array vacío para almacenar los números
$numeros = array();

// Genera 10 números aleatorios y los almacena en el array
for ($i = 0; $i < 10; $i++) {
    $numeros[$i] = rand(0, 50);
}

// Inicializa la variable para almacenar el número mayor
$numeroMayor = $numeros[0]; // Suponemos que el primer número es el mayor

// Encuentra el número mayor en el array
for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] > $numeroMayor) {
        $numeroMayor = $numeros[$i];
    }
}

// Muestra el array y el número mayor
echo "Números generados: " . implode(', ', $numeros) . "\n" . "<br>";
echo "El número mayor es: $numeroMayor\n";

echo "<h4>2. Hallar el area de un circulo con radio 7</h4>";

// Radio del círculo
$radio = 7;

// Calcula el área del círculo
$area = pi() * pow($radio, 2);

// Muestra el resultado
echo "El área del círculo con radio $radio es: $area\n";

echo "<h4>3. Realizar una operacion trigonometrica del grado de dificultad que consideres</h4>";

// Convertimos grados a radianes, ya que las funciones trigonométricas en PHP trabajan con radianes
$angulo1_radianes = deg2rad(45);
$angulo2_radianes = deg2rad(30);

// Calculamos el seno y coseno de los ángulos en radianes
$sin_45 = sin($angulo1_radianes);
$cos_30 = cos($angulo2_radianes);

// Realizamos la operación trigonométrica
$resultado = $sin_45 + $cos_30;

// Muestra el resultado
echo "El resultado de sin(45°) + cos(30°) es: $resultado\n";

echo "<h4>4. Calcular la hipotenusa de un triangulo rectangulo de lados. A = 5cm  y B = 6cm</h4>";

// Lados del triángulo rectángulo
$lado_a = 5;
$lado_b = 6;

// Calcula la hipotenusa usando el teorema de Pitágoras
$hipotenusa = sqrt(pow($lado_a, 2) + pow($lado_b, 2));

// Muestra el resultado
echo "La hipotenusa del triángulo rectángulo con lados $lado_a cm y $lado_b cm es: $hipotenusa cm\n";

