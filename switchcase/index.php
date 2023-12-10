<?php

/** COMPARARCION ENTRE ELSEIF Y SWITCH */

// Switch Case

$x = 1;

if ($x == 0) {
    echo "X es igual a 0";
}
elseif ($x == 1) {
    echo "X es igual a 1 <br> <br>";
}
elseif ($x === 2) {
    echo "X es igual a 2 <br> <br>";
}

// Cambio de elseif con Switch

$x = 1;

switch ($x)
{
    case 0:
        echo "X es igual a 0";
        break;
    case 1:
        echo "X es igual a 1 <br> <br>";
        break;    
    case 2:
        echo "X es igual a 2";
        break;    
}
//break rompe la evaluacion de los siguientes case cuando es encontrado, en elseif se analiza todas las sentencias 
//asi ya haya encontrado el valor

//Switch permite strings en los case

$fruta = "Mango";

switch ($fruta)
{
    case "Manzana":
        echo "La fruta es una Manzana";
        break;
    case "Mango":
        echo "La fruta es un Mango <br> <br>";
        break;    
    case "Pera":
        echo "La fruta es una Pera";
        break;    
}

//Default es el que se ejecuta si no se da ningun case

$diasemana = "Sabado";
$mensaje = "Error";

switch ($diasemana) {
    case 'Lunes';
    case 'Martes';
    case 'Miércoles';
    case 'Jueves';
    case 'Viernes':
        $mensaje = "día laborable";
        break;
    case 'Sabado';
    case 'Domingo':
        $mensaje = "día de descanso <br> <br>";
        break;
    default:
        $mensaje = "día invalido";
        break;
}

echo $diasemana . " es un " . $mensaje;

// Otro ejemplo de default

$nombre = "Alejandro";

switch ($nombre) {
    case 'Nicolas':
        echo "Hola Nicolas";
        break;
    case 'Jehison':
        echo "Hola Jehison";
        break;
    case 'Diego':
        echo "Hola Jehison";
        break;
    default:
        echo "Hola sea quien seas <br> <br>";
}

// Switch case anidado

$x = 8;
$y = 4;

$operacion = "/";

switch ($operacion) {
    case "+":
        $suma = $x + $y;
        echo "Resultado de la suma: " . $suma;
        break;
    case "-":
        $resta = $x - $y;
        echo "Resultado de la resta: " . $resta;
        break;
    case "*":
        $multiplicacion = $x * $y;
        echo "Resultado de la multiplicacion: " . $multiplicacion;
        break;
    case "/":
        $division = $x / $y;
        echo "Resultado de la division: " . $division . "<br> <br>";
        break;
    default:
        echo "La operacion no es valida";
        break;
}

//Otro ejemplo de Switchcase anidado

$notaParcial = 4;
$notaFinal = 4;

switch ($notaFinal) {
    case 1;
    case 2;
    case 3:
        echo "Perdiste la materia <br>";
        break;
    case 4;
    case 5:
        echo "Ganaste la materia <br>";
        switch ($notaParcial) {
            case 1;
            case 2;
            case 3:
                echo "Pero perdiste el parcial";
                break;
            case 4;
            case 5:
                echo "Y tambien el parcial";
                break;
            default:
                echo "Error";
                break;
        }
        break;
    default:
        echo "Error";
        break;
}