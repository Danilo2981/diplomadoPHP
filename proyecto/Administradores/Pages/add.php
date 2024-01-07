<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Resgistrar Adminsitrador</h1>
    <form action="../Controladores/add.php" method="POST">
        Nombre <br>
        <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre" id=""> <br> <br>
        Apellido <br>
        <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido" id=""> <br> <br>
        Usuario <br>
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario" id=""> <br> <br>
        Password <br>
        <input type="password" name="Password" required="" autocomplete="off" placeholder="Password" id=""> <br> <br>
        <input type="submit" value="Registrar Administrador">
    </form>
</body>
</html>