<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Editar Estudiante</h1>
    <form action="../Controladores/edit.php" method="POST">
        <input type="hidden" name="Id" value="">
        Nombre <br>
        <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre" id=""> <br> <br>
        Apellido <br>
        <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido" id=""> <br> <br>
        Documento <br>
        <input type="text" name="Documento" required="" autocomplete="off" placeholder="Documento" id=""> <br> <br>
        Correo <br>
        <input type="email" name="Correo" required="" autocomplete="off" placeholder="Correo" id=""> <br> <br>
        Materia <br>
        <select name="Materia" required="" id="">
            <option value="">Seleccione</option>
            <option value="Ingles">Ingles</option>
            <option value="Español">Español</option>
            <option value="Ciencias">Ciencias</option>
        </select> <br> <br>
        Docente <br>
        <select name="Docente" required="" id="">
            <option value="">Seleccione</option>
            <option value="Estefania Lopez">Estefania Lopez</option>
            <option value="Juan River">Juan River</option>
            <option value="Stiven Quintero">Stiven Quintero</option>
        </select> <br> <br>
        Docente <br>
        <input type="number" name="Promedio" required="" autocomplete="off" placeholder="Promedio" id=""> <br> <br>
        <input type="submit" value="Editar Estudiante">
    </form>
</body>
</html>