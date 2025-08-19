<?php
    // test de conexion, con el script dmo_conexion.php
    require_once 'dbConexion_estudiantes.php';
    //
    $dbh = DaoConexion::getConexion();
    //
    if($dbh){
        echo "La conexion a la base de datos db_estudiantes ha sido exitosa!!";
    }else{
        echo "La conexion a la base de datos db_estudiantes no se realizo";
    }