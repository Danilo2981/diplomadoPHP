<?php 
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Docentes.php');

    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $Modelo = new Docentes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Docentes</h1>
    <a href="add.php" tarject="_blank">Registrar Docente</a> <br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Perfil</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>

        <?php 
            $Docentes = $Modelo->get();
            if ($Docentes != null) {
                foreach ($Docentes as $Docente) {
                    # code...
        ?>

        <tr>
        <td><?php echo $Docente['ID_USUARIO'] ?></td>
            <td><?php echo $Docente['NOMBRE'] ?></td>
            <td><?php echo $Docente['APELLIDO'] ?></td>
            <td><?php echo $Docente['USUARIO'] ?></td>
            <td><?php echo $Docente['PERFIL'] ?></td>
            <td><?php echo $Docente['ESTADO'] ?></td>
            <td>
                <a href="edit.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" tarject="_blank">Editar</a>
                <a href="delete.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" tarject="_blank">Eliminar</a>
            </td>
        </tr>

        <?php        
            }
        }
        ?>
    </table>
</body>
</html>