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
echo $edad . "<br>". "<br>";

// Resultado 980, las variables no tienen separacion

echo $x=9 ;
echo $y=8;
echo $z=0 . "<br>" . "<br>";

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

 echo $variable1 . "<br>" . "<br>";

 
 // Un nombre de variable solo puede conterner caracteres alfanumericos y guiones bajos (Az, 0-9 y _)

$variable_1 = 8754;
$x = "Punto x";
$nombre_persona = "Andres";
$_edad = 78;
$_1apellido = "Carmelo";
$NUMEROPAR = 46;

//Se diferencia entre mayusculas y minusculas

echo $NOMBRE = "Diego ";
echo $nombre = "Alejandro <br> <br>"; 

/**
 * $this es una variable que no puede ser usada
 */

//El valor de una variable puede ser remplazado por otro sin importar el tipo de dato

$nombre = "Diego ";
$nombre = "Alex <br> <br>";

echo $nombre;

$x = "Politecnico de Colombia";
$x = 43;

echo $x . "<br>" . "<br>";

/** VARIABLES POR REFERENCIA 
 * Se utiliza & para referenciar a la variable en cuestion
 * Solamente se puede referenciar nombres, no se puede referenciar una operacion o un valor
*/

$nombre = "Ana";
$name = &$nombre;

$nombre = "Andrea";

echo $nombre . " ";
echo $name . "<br>" . "<br>";

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
    echo "Variable local : " . $x . "<br>" . "<br>";

}

prueba();

//para acceder a la variable global dentro de una funcion se utiliz la palabra reservada global

$edad = 41;

function prueba2() {
    global $edad;
    $edad = 22;
}

prueba2();

echo $edad . "<br>" . "<br>";

// Tambien se puede acceder utilizando $GLOBALS

$altura = 141;

function prueba3() {
    $GLOBALS['altura'] = 172;
}

prueba3();

echo $altura . "<br>" . "<br>";

/** VARIABLES ESTATICAS */

// Permiten retener informacion en el tiempo de ejecucion 

function prueba4(){
    static $x= 0;
    echo $x . "<br>";
    $x++;
}

prueba4();
prueba4();
prueba4();
prueba4();


/** VARIABLES CONSTANTES */

//Son elementos que guardan un valor fijo que no se puede modificar

const ESTUDIANTE = "Stiven Tangarife Serna";

echo ESTUDIANTE . "<br>" . "<br>";

// La otra forma es usar define
define("PROFESOR", "Diego Alejandro Palacio Valencia");
echo PROFESOR . "<br>" . "<br>";

echo "<h1>Ejercicios Guia Didactica</h1>";

echo "<h2>Ejercicio 1</h2>";

$nombre = "Diego Alejandro Palacio Valencia";
$correo = "diegovalencia@gmail.com";

echo $nombre . $correo . "<br>";
echo $nombre . " " . $correo . "<br>";
echo "Nombre: " . $nombre . " Correo: " . $correo . "<br>" . "<br>";

echo "<h2>Ejercicio 2</h2>";

$numero1 = 7;
$numero2 = 2;
$numero3 = 6;

echo $numero1 . $numero2 . $numero3 . "<br>";
echo $numero1 . $numero3 . $numero2 . "<br>";
echo $numero2 . $numero1 . $numero3 . "<br>";
echo $numero2 . $numero2 . $numero1 . "<br>";
echo $numero3 . $numero1 . $numero2 . "<br>";
echo $numero3 . $numero3 . $numero1 . "<br>";

echo "<h1>Ejercicios Unidad</h1>";

echo "<h2>1. Dentro de un archivo crea las variables</h2>";

echo "<h3>Variable que permita almacenar el nombre de una persona.</h3>";

$name = "Danlilo";
var_dump($name);

echo "<h3>Una variable x para almacenar un número con dos decimales.</h3>";

$x = 1.25;
var_dump($x);

echo "<h3>Una constante para alamacenar el valor del dolar en pesos colombianos.</h3>";

// Definir una constante con la tasa de cambio aproximada de USD a COP
define('DOLAR_A_COP', 4000); // Este valor es solo un ejemplo, debes ajustarlo según la tasa de cambio actual

// Ejemplo de uso
$cantidadDolares = 50;
$cantidadPesos = $cantidadDolares * DOLAR_A_COP;

echo "$cantidadDolares dólares son equivalentes a $cantidadPesos pesos colombianos." . "<br>" . "<br>";

// Definir una constante con la tasa de cambio aproximada de USD a COP
const DOLAR_A_PCO = 4000; // Este valor es solo un ejemplo, debes ajustarlo según la tasa de cambio actual

// Ejemplo de uso
$cantidadDolares = 50;
$cantidadPesos = $cantidadDolares * DOLAR_A_PCO;

echo "$cantidadDolares dólares son equivalentes a $cantidadPesos pesos colombianos.";

echo "<h3>Una variable para almacenar los primeros 7 decimales de Pi.</h3>";

$pi = 3.1415926;
var_dump($pi);

echo "<h3>Una variable para almacenar los primeros 15 decimales de Euler.</h3>";

// Almacenar los primeros 15 decimales de Euler
$euler = 2.718281828459045;
var_dump($euler);


echo "<h2>2. Corrije las siguientes variables y declaraciones. Ver ejercicio en folleto</h2>";

const PI = 3.1415926;
$nombre = "Diego";
$apellido;
static $lenguaje = 'PHP';
$saludo = 'Hola';
$edad = 18.5 . " años";
$precioCamisa = 48500;
define('dosVARIABLES', "Hola, Saludos");
define('NUMERO', '9');
$ciudad1 = "Medellin";
$ApellidoCompleto = "Palacio Valencia";
const VERSION = "4.2.4";
$GLOBALS["AÑO"] = 2019;
$suma = $x + $y;
$ciudad = &$nombre;