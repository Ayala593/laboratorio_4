<?php 
    // Incluir las clase del Modelo 
    include_once "../models/crud_estudiantes.php"; 
    include_once "../models/estudiantes.php"; 
 
    $crud = new CrudEstudiantes(); 
    $estudiante = new Estudiantes(); 
 
    // Inserta Estudiante 
    if(isset($_POST['insertar'])){ 
        $estudiante->setNombre($_POST['nombre']);
        $estudiante->setApellido($_POST['apellido']);
        $estudiante->setFecha_nacimiento($_POST['fecha_nacimiento']); 
        $estudiante->setCorreo($_POST['correo']);
        $estudiante->setCarrera($_POST['carrera']);
 
        // Llamar al metodo insertar en el CRUD 
        $crud->insertar($estudiante); 
    } 
    // Actualiza Estudiante 
    if(isset($_POST['actualizar'])){ 
        $estudiante->setId($_POST['id']); 
        $estudiante->setNombre($_POST['nombre']);
        $estudiante->setApellido($_POST['apellido']);
        $estudiante->setFecha_nacimiento($_POST['fecha_nacimiento']); 
        $estudiante->setCorreo($_POST['correo']);
        $estudiante->setCarrera($_POST['carrera']);
        // 
        $crud->actualizar($estudiante); 
    } 
    // Eliminar Estudiante
    if($_GET['accion'] == "eliminar"){ 
        $crud->eliminar($_GET['id']); 
    } 
    header('Location: ../views/mostrarEstudiantes.php'); 
?>