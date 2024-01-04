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
            foreach ($Estudiantes as $Estudiante){        
        ?>

        <tr>
            <td><?php echo $Estudiante['ID_ESTUDIANTE'] ?></td>
            <td><?php echo $Estudiante['NOMBRE'] ?></td>
            <td><?php echo $Estudiante['APELLIDO'] ?></td>
            <td><?php echo $Estudiante['DOCUMENTO'] ?></td>
            <td><?php echo $Estudiante['CORREO'] ?></td>
            <td><?php echo $Estudiante['MATERIA'] ?></td>
            <td><?php echo $Estudiante['DOCENTE'] ?></td>
            <td><?php echo $Estudiante['PROMEDIO'] ?>%</td>
            <td><?php echo $Estudiante['FECHA_REGISTRO'] ?></td>
            <td>
                <a href="edit.php" tarject="_blank">Editar</a>
                <a href="delete.php" tarject="_blank">Eliminar</a>
            </td>
        </tr>

        <?php       
            }
        }
        ?>
    </table>
</body>
</html>