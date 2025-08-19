<?php 
    // Incluir las clases modelo 
    require_once '../models/crud_estudiantes.php'; 
    require_once '../models/estudiantes.php'; 
    // 
    $crud = new CrudEstudiantes(); 
    $estudiante = new Estudiantes(); 
    // 
    $estudiante = $crud->obtenerEstudiante($_GET['id']); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial
    scale=1.0"> 
    <title>Actualizar Estudiante</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
</head> 
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
    <form action="../controllers/controllerEstudiante.php" method="POST"> 
        <table class="table table-striped table-bordered table-hover align-middle " border="1" cellpading="1" cellspacing="0"> 
            <tr> 
                <input type="hidden" name="id" value="<?php echo $estudiante->getId()?>"> 
                <td>Nombre del estudiante</td> 
                <td><input type="text" name="nombre" value="<?php echo $estudiante->getNombre()?>"></td> 
            </tr>
            <tr>
                <td>Apellido del estudiante</td> 
                <td><input type="text" name="apellido" value="<?php echo $estudiante->getApellido()?>"></td> 
            </tr>
            <tr> 
                <td>Fecha de nacimiento</td> 
                <td><input type="text" name="fecha_nacimiento" value="<?php echo $estudiante->getFecha_nacimiento()?>"></td> 
            </tr> 
            <tr> 
                <td>Correo</td> 
                <td><input type="text" name="correo" value="<?php echo $estudiante->getCorreo()?>"></td> 
            </tr>
            <tr> 
                <td>La carrera</td> 
                <td><input type="text" name="carrera" value="<?php echo $estudiante->getCarrera()?>"></td> 
            </tr>
        </table> 
        <input type="hidden" name="actualizar" value="actualizar"> 
        <input name="actualizar" class="btn btn-success" type="submit" value="Actualizar Datos"> 
        <a class="btn btn-success" href="mostrarEstudiantes.php">Volver</a> 
    </form>
            </div>
        </div>
    </div>
</body> 
</html>