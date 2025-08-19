<?php 
    // metodos para realizar el CRUD en la tabla libro 
    require_once 'dbConexion_estudiantes.php'; 
    class CrudEstudiantes{ 
        // 
        public function __construct(){} 
        // Metodos para mostrar todos los estudiantes 
        public function mostrar(){ 
            $dbh =DaoConexion::getConexion(); 
            $listaEstudiantes = []; 
            $sql = "SELECT * FROM estudiantes"; 
            $stmt = $dbh->query($sql); 
            // Iterar 
            foreach($stmt->fetchAll() as $estudiante){ 
                $miEstudiante = new Estudiantes(); 
                $miEstudiante->setId($estudiante['id']); 
                $miEstudiante->setNombre($estudiante['nombre']);
                $miEstudiante->setApellido($estudiante['apellido']); 
                $miEstudiante->setFecha_nacimiento($estudiante['fecha_nacimiento']); 
                $miEstudiante->setCorreo($estudiante['correo']);
                $miEstudiante->setCarrera($estudiante['carrera']);
                $listaEstudiantes[] = $miEstudiante; 
            } 
            return $listaEstudiantes;
        } 
        // Buscar un Libro por su ID 
        public function obtenerEstudiante($id){ 
            $dbh =DaoConexion::getConexion(); 
            $sql = "SELECT * FROM Estudiantes WHERE ID = :id"; 
            $stmt = $dbh->prepare($sql); 
            $stmt->bindValue('id', $id); 
            $stmt->execute(); 
            $estudiante = $stmt->fetch(); 
            $miEstudiante = new Estudiantes(); 
            $miEstudiante->setId($estudiante['id']); 
            $miEstudiante->setNombre($estudiante['nombre']);
            $miEstudiante->setApellido($estudiante['apellido']);
            $miEstudiante->setFecha_nacimiento($estudiante['fecha_nacimiento']); 
            $miEstudiante->setCorreo($estudiante['correo']);
            $miEstudiante->setCarrera($estudiante['carrera']); 

            return $miEstudiante; 
        } 
        // Metodo para Insertar 
        public  function insertar($estudiante){ 
            $dbh =DaoConexion::getConexion(); 
            $sql = "INSERT INTO Estudiantes VALUES (Null, :nombre, :apellido, :fecha_nacimiento, :correo, :carrera)"; 
            $stmt = $dbh->prepare($sql); 
            $stmt->bindValue('nombre', $estudiante->getNombre());
            $stmt->bindValue('apellido', $estudiante->getApellido());
            $stmt->bindValue('fecha_nacimiento', $estudiante->getFecha_nacimiento()); 
            $stmt->bindValue('correo', $estudiante->getCorreo());
            $stmt->bindValue('carrera', $estudiante->getCarrera()); 
            $stmt->execute(); 
        } 
        // Metodo para actualizar
        public  function actualizar($estudiante){ 
            $dbh =DaoConexion::getConexion(); 
            $sql = "UPDATE Estudiantes SET nombre=:nombre, apellido=:apellido, fecha_nacimiento=:fecha_nacimiento, correo=:correo, carrera=:carrera WHERE ID = :id"; 
            $stmt = $dbh->prepare($sql); 
            $stmt->bindValue('id', $estudiante->getId()); 
            $stmt->bindValue('nombre', $estudiante->getNombre());
            $stmt->bindValue('apellido', $estudiante->getApellido());
            $stmt->bindValue('fecha_nacimiento', $estudiante->getFecha_nacimiento()); 
            $stmt->bindValue('correo', $estudiante->getCorreo());
            $stmt->bindValue('carrera', $estudiante->getCarrera());
            $stmt->execute(); 
        } 
        // Metodo para Eliminar 
        public  function eliminar($id){ 
            $dbh =DaoConexion::getConexion(); 
            $sql = "DELETE FROM Estudiantes WHERE ID = :id"; 
            $stmt = $dbh->prepare($sql); 
            $stmt->bindValue('id', $id); 
            $stmt->execute(); 
        } 
    }