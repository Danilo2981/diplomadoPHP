<?php

/** FUNCIONES */

//Bloques de codigo que se ejecutan repetidamente, no se ejecutan inmediatamente cuando se carga
// la pagina, se ejecutan al momento de realizarse una llamada a la misma

echo "<h4>1. Una funcion que reciba cinco numeros enteros como parametros y muestre por pantalla el resultado de sumar
los cinco numeros (tipo procedimiento, no hay valor devuelto)</h4>";

function sumarCincoNumeros($num1, $num2, $num3, $num4, $num5) {
    $suma = $num1 + $num2 + $num3 + $num4 + $num5;
    echo "La suma de los cinco números es: $suma\n";
}

// Llamamos a la función con cinco números
sumarCincoNumeros(2, 4, 6, 8, 10);

echo "<h4>2. Una funcion que reciba cinco numeros enteros como argumentos y devuelva el resultado de sumar los cinco numeros,
Asigna el resultado de una invocacion a la funcion con los numeros 2,5,1,8,10 a una variable de nombre temporal y muestra el 
resultado</h4>";

function sumarNumeros($num1, $num2, $num3, $num4, $num5) {
    $suma = $num1 + $num2 + $num3 + $num4 + $num5;
    return $suma;
}

// Llamamos a la función con cinco números y almacenamos el resultado en una variable temporal
$resultadoTemporal = sumarNumeros(2, 5, 1, 8, 10);

// Mostramos el resultado almacenado en la variable temporal
echo "El resultado de sumar 2, 5, 1, 8, 10 es: $resultadoTemporal\n";

echo "<h4>3. Una funcion que reciba como parametros el valor del radio de la base y la altura de un cilindro y devuelva
el volumen del cilindor, teniendo en cuenta que el volumen de un cilindro se calcula como Volumen = numeroPi * radio *
radio * Altura, siendo numeroPi = 3.1416 aproximadamente o usa la constante de PI.</h4>";

// Definimos la constante PI
define('PI', 3.1416);

function calcularVolumenCilindro($radio, $altura) {
    // Calculamos el volumen del cilindro utilizando la fórmula Volumen = PI * radio * radio * altura
    $volumen = PI * $radio * $radio * $altura;
    return $volumen;
}

// Ejemplo de uso de la función
$radioBase = 2.5;
$alturaCilindro = 7.0;

// Llamamos a la función y almacenamos el resultado en una variable
$volumenCilindro = calcularVolumenCilindro($radioBase, $alturaCilindro);

// Mostramos el resultado
echo "El volumen del cilindro con radio $radioBase y altura $alturaCilindro es: $volumenCilindro\n";

echo "<h4>4. Diseñe una funcion que muestre si un numero es par o impar.</h4>";

function determinarParidad($numero) {
    if ($numero % 2 == 0) {
        echo "$numero es un número par.\n";
    } else {
        echo "$numero es un número impar.\n";
    }
}

// Ejemplo de uso de la función
$num = 7;
determinarParidad($num);

echo "<h4>5. Realizar un algoritmo que incremente un numero pasado como valor.</h4>";

function incrementarNumero($numero) {
    $numeroIncrementado = $numero + 1;
    return $numeroIncrementado;
}

// Ejemplo de uso de la función
$numeroOriginal = 5;
$numeroIncrementado = incrementarNumero($numeroOriginal);

echo "El número original es: $numeroOriginal\n" . "<br>";
echo "El número incrementado es: $numeroIncrementado\n";

echo "<h4>6. Crear una funcion que retorne el nombre del mes a partir de un numero entre 1 y 12.</h4>";

function obtenerNombreMes($numeroMes) {
    $meses = array(
        1 => "Enero",
        2 => "Febrero",
        3 => "Marzo",
        4 => "Abril",
        5 => "Mayo",
        6 => "Junio",
        7 => "Julio",
        8 => "Agosto",
        9 => "Septiembre",
        10 => "Octubre",
        11 => "Noviembre",
        12 => "Diciembre"
    );

    // Verifica que el número esté dentro del rango permitido
    if ($numeroMes >= 1 && $numeroMes <= 12) {
        return $meses[$numeroMes];
    } else {
        return "Número de mes no válido";
    }
}

// Ejemplo de uso de la función
$numeroMes = 8;
$nombreMes = obtenerNombreMes($numeroMes);

echo "El nombre del mes $numeroMes es: $nombreMes\n";

echo "<h4>7. Desarrollar una funcion que calcule el IVA aplicable a un producto, la funcion debe recibir el total del 
producto y el IVA para aplicar, sino no se pasa un IVA, por defecto debera tener 12%.</h4>";

function calcularIVA($totalProducto, $porcentajeIVA = 12) {
    // Verifica que el porcentaje de IVA esté dentro del rango permitido
    if ($porcentajeIVA < 0 || $porcentajeIVA > 100) {
        return "Porcentaje de IVA no válido";
    }

    // Calcula el monto del IVA
    $iva = ($totalProducto * $porcentajeIVA) / 100;

    return $iva;
}

// Ejemplo de uso de la función
$totalProducto = 100;
$porcentajeIVA = 15; // Puedes cambiar este valor o dejarlo en blanco para utilizar el valor predeterminado

$ivaCalculado = calcularIVA($totalProducto, $porcentajeIVA);

echo "El IVA aplicable al producto con un total de $totalProducto es: $ivaCalculado\n";

