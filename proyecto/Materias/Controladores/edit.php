<?php

require_once('../Modelo/Materias.php');

if ($_POST) {
    $ModeloMaterias = new Materias();
    $Id = $_POST['Id'];
    $Materia = $_POST['Materia'];

    $ModeloMaterias->update($Id,$Materia);
} else {
    header('Location: ../../index.php');
}
