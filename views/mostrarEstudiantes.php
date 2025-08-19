<?php 
    // Incluir las clases modelo 
    require_once '../models/crud_estudiantes.php'; 
    require_once '../models/estudiantes.php';
    // 
    $crud = new CrudEstudiantes(); 
    $estudiante = new Estudiantes(); 
    // 
    $listarEstudiantes = $crud->mostrar(); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Lista de Estudiantes</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head> 
<body class="fuente">
    <div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-10"> <h1>Listado de estudiantes</h1>
    <table class="table table-dark table-bordered table-hover align-middle fuente"> 
        <head>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Fecha de nacimiento</td> 
        <td>Correo</td>
        <td>Carrera</td>
        <td>Actualizar</td> 
        <td>Eliminar</td> 
        </head> 
        <?php 
            foreach ($listarEstudiantes as $estudiante) { ?> 
                <tr>
                <td><?php echo $estudiante ->getid()?></td>
                <td><?php echo $estudiante->getNombre()?></td>
                <td><?php echo $estudiante->getApellido()?></td>
                <td><?php echo $estudiante->getFecha_nacimiento()?></td> 
                <td><?php echo $estudiante->getCarrera()?></td>
                <td><?php echo $estudiante->getCorreo()?></td>
                <td><a class="btn btn-warning btn-sm" href="actualizarEstudiantes.php?id=<?php echo $estudiante->getId()?>">Actualizar</></td> 
                <td><a class="btn btn-danger btn-sm" 
                href="../controllers/controllerEstudiante.php?id=<?php echo $estudiante->getId()?>&accion=eliminar">Eliminar</a></td> 
                </tr> 
            <?php 
            }   
            ?> 
    </table>
    <div class="d-flex justify-content-center"> <a class="btn btn-success btn-sm " href="indexEstudiantes.php">Volver</a> </div>
    </div>
    </div>
    </div>
</body> 
</html>