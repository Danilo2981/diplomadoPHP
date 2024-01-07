<?php 
    require_once('../../Usuarios/Modelo/Usuarios.php');

    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $Id = $_GET['Id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Eliminar Admininstrador</h1>
    <form action="../Controladores/delete.php" method="POST">
        <input type="hidden" name="Id" value="<?php echo $Id ?>">
        <p>¿Estas seguro que deseas eliminar este Administrador?</p>
        <input type="submit" value="Eliminar Administrador">
    </form>
</body>
</html>