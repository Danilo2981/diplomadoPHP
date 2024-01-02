<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Estudiantes.php');
    
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $Modelo = new Estudiantes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Estudiantes</h1>
    <a href="add.php" tarject="_blank">Registrar Estudiante</a> <br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Materia</th>
            <th>Docente</th>
            <th>Promedio</th>
            <th>Fecha de Registro</th>
            <th>Acciones</th>
        </tr>

        <?php
        $Estudiantes = $Modelo->get();
        if ($Estudiantes != null) {
            foreach ($Estudiantes as $Estudiante) {
                # code...
            }
        } else {
            # code...
        }
        
        ?>

        <tr>
            <td>1</td>
            <td>Danilo</td>
            <td>Vega</td>
            <td>1002420246</td>
            <td>danilo.vega.lopez@gmail.com</td>
            <td>Español</td>
            <td>Stiven Tangarife</td>
            <td>98%</td>
            <td>2019-10-23</td>
            <td>
                <a href="edit.php" tarject="_blank">Editar</a>
                <a href="delete.php" tarject="_blank">Eliminar</a>
            </td>
        </tr>
    </table>
</body>
</html>