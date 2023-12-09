<?php

//25 no es mayor que 30 por lo cual imprime la condicion de else

if (25 > 6*5) {
    echo "Excelente, la condicional es verdadera";
} else {
    echo "Opps, la condicional es falsa <br> <br>";
}

//Condicional que proviene de un formulario

$Pregunta1 = "Si";
$Pregunta2 = "No";

echo "¿Eres de Ecuador? <br>";
echo "Respuesta: " . $Pregunta1 . "<br>";

if ($Pregunta1 == "Si") {
    echo "¿Eres de Atuntaqui? <br>";
    echo "Respuesta: " . $Pregunta2 . "<br>";

    if ($Pregunta2 == "Si") {
        echo "Bienvenido <br>";
    } else {
        echo "Visitanos <br> <br>";
    }
    
} else {
    echo "Eres extranjero <br>";
}

// Varios condicionasles con else if

$velocidad = 89;

if ($velocidad >= 0 and $velocidad <=30) {
    echo "Zonas escolares";
} elseif ($velocidad > 30 and $velocidad <=60) {
    echo "Vias Urbanas";
} elseif ($velocidad > 60 and $velocidad <=80) {
    echo "Vias Urbanas";
} elseif ($velocidad > 80 and $velocidad <=100) {
    echo "Rutas Nancionales <br> <br>";
} else {
    echo "Estas infringiendo los limites de velocidad";
}

//NO se puede unir mas de un else con otro else dara error este tiene que ser if elseif(cuantos se necesite) else

//Condicion anidada

$dolar = 3500;

if ($dolar >= 0) {
    if ($dolar > 0 AND $dolar <= 1000) {
        echo "El dolar tiene un valor bajo";
    }
    elseif ($dolar > 1000 AND $dolar <= 2000) {
        echo "El dolar tiene un valor medio bajo";
    }
    elseif ($dolar > 2000 AND $dolar <= 3000) {
        echo "El dolar tiene un valor alto";
    }
    elseif ($dolar > 3000) {
        echo "El dolar tiene un valor muy alto";
    }
} else {
    echo "El dolar no puede ser un valor negativo";
}

