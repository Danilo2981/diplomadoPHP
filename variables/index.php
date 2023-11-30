<?php

//Variables

$numero = 8;
$nombre = "Diego";
$altura = 1.72;

/** Las variables se crean en el momento que se le asigna un valor
 * 
 *$edad;
 *echo $edad;
 *Dara error ya que no a sido inicializada la variable o asignada un valor 
 *
 */

//Lo correcto es inicializar la variable

$edad;
$edad = 22;
echo $edad;

// Resultado 980, las variables no tienen separacion

echo $x=9;
echo $y=8;
echo $z=0;

/**
 * Un nombre no puede iniciar con un numero, daria error
 * 
 *  $1variable = 8754;
 * 
 *  echo $1variable;
 * 
 */

 // Forma correcta de declarar la variable anterior

 $variable1 = 8754;

 echo $variable1;

 
 // Un nombre de variable solo puede conterner caracteres alfanumericos y guiones bajos (Az, 0-9 y _)

$variable_1 = 8754;
$x = "Punto x";
$nombre_persona = "Andres";
$_edad = 78;
$_1apellido = "Carmelo";
$NUMEROPAR = 46;

//Se diferencia entre mayusculas y minusculas

echo $NOMBRE = "Diego";
echo $nombre = "Alejandro"; 

/**
 * $this es una variable que no puede ser usada
 */

//El valor de una variable puede ser remplazado por otro sin importar el tipo de dato

$nombre = "Diego";
$nombre = "Alex";

echo $nombre;

$x = "Politecnico de Colombia";
$x = 43;

echo $x;

/** VARIABLES POR REFERENCIA 
 * Se utiliza & para referenciar a la variable en cuestion
 * Solamente se puede referenciar nombres, no se puede referenciar una operacion o un valor
*/

$nombre = "Ana";
$name = &$nombre;

$nombre = "Andrea";

echo $nombre;
echo $name;

/** INICIALIZACION POR DEFECTO DE LAS VARIABLES 
 * 
 * BOOLENAS -----------> FALSE
 * INTEGER Y FLOAT ----> CERO 0
 * CADENAS ------------> CADENA VACIA
 * ARRAYS -------------> ARRAY VACIO
 * 
*/

/** AMBITOS DE LAS VARIABLES */

/** AMBITO LOCAL Y GLOBAL */

$X = 5; //variable global

function prueba() {
    
    // echo "Variable global : " . $x;  las variables globales no pueden ser accedidas de forma local

    $x = 8;
    echo "Variable local : " . $x;

}

prueba();

//para acceder a la variable global dentro de una funcion se utiliz la palabra reservada global

$edad = 41;

function prueba2() {
    global $edad;
    $edad = 22;
}

prueba2();

echo $edad;

// Tambien se puede acceder utilizando $GLOBALS

$altura = 141;

function prueba3() {
    $GLOBALS['altura'] = 172;
}

prueba3();

echo $altura;

/** VARIABLES ESTATICAS */

// Permiten retener informacion en el tiempo de ejecucion 

function prueba4(){
    static $x= 0;
    echo $x;
    $x++;
}

prueba4();
prueba4();
prueba4();
prueba4();


/** VARIABLES CONSTANTES */

//Son elementos que guardan un valor fijo que no se puede modificar

const ESTUDIANTE = "Stiven Tangarife Serna";

echo ESTUDIANTE;

// La otra forma es usar define
define("PROFESOR", "Diego Alejandro Palacio Valencia");
echo PROFESOR;


