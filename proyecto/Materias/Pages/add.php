<?php 
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../../Metodos.php');

    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $ModeloMetodos = new Metodos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Resgistrar Materia</h1>
    <form action="../Controladores/add.php" method="POST">
        Nombre <br>
        <input type="text" name="Materia" required="" autocomplete="off" placeholder="Nombre de la Materia" id=""> <br> <br>
        <input type="submit" value="Registrar Materia">
    </form>
</body>
</html>