<?php

include("./login/loginbd.php");


$nombre = $_POST["nombre"];
$comentario= $_POST["info"];

$query= "INSERT INTO asistentes(nombre,info) values('$nombre','$comentario')";
$resultado= $conexion->query($query);

if($resultado){
    header("Location: asistentesS.php");
}else{
    echo "no se guardo";
}
?>