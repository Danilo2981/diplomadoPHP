<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Eliminar Estudiante</h1>
    <form action="../Controladores/delete.php" method="POST">
        <input type="hidden" name="Id" value="">
        <p>¿Estas seguro que deseas eliminar este Estudiante?</p>
        <input type="submit" value="Eliminar Estudiante">
    </form>
</body>
</html>