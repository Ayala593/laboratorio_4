<?php 
    // Clase para obtener una conexion 
        class DaoConexion{ 
            // Variable privada donde se almacena la conexion 
            private static $cnn = null; 
            public static function getConexion(){ 
            try { 
                $db = 'db_estudiantes'; 
                $dsn = "mysql:host=localhost;dbname=$db"; 
                $usuario = "root"; 
                $password = "1234"; 
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;                
                $cnn = new PDO($dsn, $usuario, $password, $pdo_options);
            } catch (Exception $e) {
                exit('Error de Conexion: '.$e->getMessage());
            }
            return $cnn; 
        } 
    }