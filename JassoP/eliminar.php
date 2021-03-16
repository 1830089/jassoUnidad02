<?php

include("./login/loginbd.php");

$id= $_REQUEST['id'];

$query= "DELETE FROM artista WHERE id_art='$id'";
$resultado= $conexion->query($query);

if($resultado){
    header("Location: listado.php");
    //echo "si se elimino";
}else{
    echo "no se elimino";
}
?>