<?php 
    // Mapa de la tabla Libro como Clase Libro 
    class Estudiantes{ 
        private $id; 
        private $nombre; 
        private $apellido;
        private $fecha_nacimiento;
        private $correo;
        private $carrera;

        function __construct(){}

        public function getId(){
		return $this->id;
	    }

        public function setId($id){
            $this->id = $id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function getFecha_nacimiento(){
            return $this->fecha_nacimiento;
        }

        public function setFecha_nacimiento($fecha_nacimiento){
            $this->fecha_nacimiento = $fecha_nacimiento;
        }

        public function getCorreo(){
            return $this->correo;
        }

        public function setCorreo($correo){
            $this->correo = $correo;
        }

        public function getCarrera(){
            return $this->carrera;
        }

        public function setCarrera($carrera){
            $this->carrera = $carrera;
        }

    }