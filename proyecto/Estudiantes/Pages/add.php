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
    <h1>Resgistrar Estudiante</h1>
    <form action="../Controladores/add.php" method="POST">
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
            <?php
            $Materias = $ModeloMetodos->getMaterias();
            if ($Materias != null) {
                foreach ($Materias as $Materia) {
            ?>
                <option value="<?php echo $Materia['MATERIA']; ?>"><?php echo $Materia['MATERIA']; ?></option>
            <?php        
                }
            }
            ?>
        </select> <br> <br>
        Docente <br>
        <select name="Docente" required="" id="">
            <option value="">Seleccione</option>
            <?php
            $Docentes = $ModeloMetodos->getDocentes();
            if ($Docentes != null) {
                foreach ($Docentes as $Docente) {
            ?>
                <option value="<?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO']; ?>"><?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO']; ?></option>
            <?php        
                }
            }
            ?>
        </select> <br> <br>
        Promedio <br>
        <input type="number" name="Promedio" required="" autocomplete="off" placeholder="Promedio" id=""> <br> <br>
        <input type="submit" value="Registrar Estudiante">
    </form>
</body>
</html>