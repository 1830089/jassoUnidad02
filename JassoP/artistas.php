<?php

include("./login/loginbd.php");


$nombre = $_POST["nombre"];
$comentario= $_POST["info"];
$imagen= addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

$query= "INSERT INTO artista(nombre,info,img) values('$nombre','$comentario','$imagen')";
$resultado= $conexion->query($query);

if($resultado){
    header("Location: listado.php");
}else{
    echo "no se guardo";
}
?>