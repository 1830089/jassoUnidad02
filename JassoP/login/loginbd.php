

<?php

	$servidor="localhost";
    $bd="Roux";
    $usuario="root";
    $contrasena="";

    // crear conexion
    $conexion= mysqli_connect($servidor,$usuario,$contrasena,$bd);
	// $mysqli = new mysqli("localhost","root","password","mexico"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

    // revisar el exito de la conexion
    if(!$conexion){
        die("no fue posible el realizar la conexion al servidor de BD");
    }else{
        echo "si se conectó a la BD";
	}
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	function validarUser($usuario,$contrasena,$conexion){
		$query = 'SELECT 2 AS user_valido FROM usuarios WHERE user="'.$usuario.'" AND pass= "'.MD5("$contrasena").'"';
		echo $query;
		$res = mysqli_query($conexion,$query) or die('Ha ocurrido un Error al Ejecutar la Consulta');
	
		if(mysqli_num_rows($res)==0)
			return false;
		else
			return true;
		
	}

?>    