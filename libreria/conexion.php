<?php
    function conectar() {
        $conexion = mysqli_connect("localhost", "root", "", "libreria");

        if (!$conexion) {
            echo "La conexion a la BD no se pudo concretar.";
        }
        return $conexion;
    }

    function desconectar($conexion) {
        mysqli_close($conexion);
    }
?>