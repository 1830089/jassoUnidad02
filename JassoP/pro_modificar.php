<?php

include("./login/loginbd.php");

$id= $_REQUEST['id'];

$nombre = $_POST["nombre"];
$comentario= $_POST["info"];
$imagen= addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

$query= "UPDATE artista SET nombre='$nombre', info='$comentario', img= '$imagen' WHERE id_art='$id'";
$resultado= $conexion->query($query);

if($resultado){
    header("Location: listado.php");
    //echo "si se modifico";
}else{
    echo "no se modifico";
}
?>