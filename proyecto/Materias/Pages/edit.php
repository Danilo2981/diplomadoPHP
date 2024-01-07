<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Editar Materia</h1>
    <form action="../Controladores/edit.php" method="POST">
        <input type="hidden" name="Id" value="">
        Nombre <br>
        <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre" id=""> <br> <br>
        <input type="submit" value="Editar Materia">
    </form>
</body>
</html>