<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Ingresar Estudiante</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
</head> 
<body>
    <div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-3">
    <!-- Rutas Relativas --> 
    <form action="../controllers/controllerEstudiante.php" method="POST"> 
        <table class="table table-dark table-bordered table-hover align-middle " border = "10" cellpading="10" cellspacing="5"> 
            <tr>
                <td>Nombre Estudiante</td> 
                <td><input required type="text" name="nombre"></td> 
            </tr>
            <tr>
                <td>Apellido del estudiante</td> 
                <td><input required type="text" name="apellido"></td> 
            </tr>
            <tr> 
                <td>Fecha de nacimiento</td> 
                <td><input required type="text" name="fecha_nacimiento"></td>
            </tr>
            <tr> 
                <td>Correo</td> 
                <td><input required type="text" name="correo"></td> 
            </tr>
            <tr> 
                <td>Carrera</td> 
                <td><input required type="text" name="carrera"></td> 
            </tr>
            <input type="hidden" name="insertar" value="insertar"> 
        </table> 
        <input class="btn btn-success" type="submit" value="Guardar Estudiante"><br><br> 
        <a class="btn btn-warning" href="indexEstudiantes.php">Volver</a> 
    </form>
    </div>
    </div>
    </div>
</body> 
</html>