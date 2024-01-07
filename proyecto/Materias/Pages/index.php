<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Materias.php');
    
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $Modelo = new Materias();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Materias</h1>
    <a href="add.php" tarject="_blank">Registrar Materia</a> <br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>

        <?php 
        $Materias = $Modelo->get();
        if ($Materias != null) {
            foreach ($Materias as $Materia) {            
        ?>

        <tr>
            <td><?php echo $Materia['ID_MATERIA'] ?></td>
            <td><?php echo $Materia['MATERIA'] ?></td>
            <td>
                <a href="edit.php?Id=<?php echo $Materia['ID_MATERIA'] ?>" tarject="_blank">Editar</a>
                <a href="delete.php?Id=<?php echo $Materia['ID_MATERIA'] ?>" tarject="_blank">Eliminar</a>
            </td>
        </tr>

        <?php 
            }
        }                
        ?>

    </table>
</body>
</html>