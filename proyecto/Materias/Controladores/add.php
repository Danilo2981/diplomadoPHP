<?php

require_once('../Modelo/Materias.php');

if ($_POST) {
    $ModeloMaterias = new Materias();

    $Materia = $_POST['Materia'];

    $ModeloMaterias->add($Materia);
} else {
    header('Location: ../../index.php ');
}
