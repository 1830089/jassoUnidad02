<?php

    function conectarBD($server,$user,$pass,$bd){
        $conexion= mysqli_connect($server,$user,$pass,$bd);
    
        if(!$conexion){
            die("Conexión a la BD Rechazada");
            return null;
        }else{
            return $conexion;
        }
    }

    function desconectar($conexion){
        mysqli_close($conexion);
    }

?>    