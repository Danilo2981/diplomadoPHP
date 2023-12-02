<?php

echo "<h2>Operadores de Decremento</h2>";

echo "<h3>Pre Decremento</h3>";
echo "<p>Decrementa la variable en razón de 1 y luego retorna la variable.</p>";

echo "<p>x = 18;
echo --x;</p>";

$x = 18;
echo --$x;


echo "<h3>Pos Decremento</h3>";
echo "<p>Retorna la variable y luego retorna la variable decrementando a razon de.</p>";

echo "<p>x = 18;
echo x--;</p>";

$x = 18;
echo "Primer valor de X = " . $x-- . "<br>";
echo "Segundo valor de X = " . $x;

