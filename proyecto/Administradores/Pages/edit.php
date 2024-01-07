<?php 
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Administradores.php');

    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $Modelo = new Administradores();
    $Id = $_GET['Id'];
    $InformacionAdminsitrador = $Modelo->getById($Id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Editar Adminsitrador</h1>
    <form action="../Controladores/edit.php" method="POST">
        <input type="hidden" name="Id" value="<?php echo $Id; ?>">

        <?php 
            if($InformacionAdminsitrador != null) {
                foreach ($InformacionAdminsitrador as $Info) {
                    # code...
        ?>

        Nombre <br>
        <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre" id="" value="<?php echo $Info['NOMBRE']; ?>"> <br> <br>
        Apellido <br>
        <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido" id="" value="<?php echo $Info['APELLIDO']; ?>"> <br> <br>
        Usuario <br>
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario" id="" value="<?php echo $Info['USUARIO']; ?>"> <br> <br>
        Password <br>
        <input type="password" name="Password" required="" autocomplete="off" placeholder="Password" id="" value="<?php echo $Info['PASSWORD']; ?>"> <br> <br>
        Estado <br>
        <select name="Estado" required="" id="" >
            <option value="<?php echo $Info['ESTADO']; ?>"><?php echo $Info['ESTADO']; ?></option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select> <br> <br>

        <?php            
            }
        }
        ?>

        <input type="submit" value="Editar Administrador">
    </form>
</body>
</html>