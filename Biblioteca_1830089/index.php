<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styel.css">
		<title>Libreria</title>
</head>
<body>
	<main>
	<a href="registro.php" title="">Agregar</a>
	<div class="tabla">
	<table>

			<tr>
				<th>Título</th>
				<th>Autor</th>
				<th>Editorial</th>
				<th>Enlace</th>
			</tr>
			<?php
				require('conection.php');
				$conexion= conectarBD("localhost","root","","biblioteca");
			
		if(ISSET($_GET['titulo'])){
			$titulo = $_GET['titulo']; 
			$autor = $_GET['autor']; 
			$edit= $_GET['editorial']; 
			$enlace= $_GET['enlace']; 
			$consulta ="INSERT INTO libros values(NULL,'$titulo','$autor',,'$edit','$enlace')";
			#$consulta ="INSERT INTO libreria values(NULL,'$titulo','$auor',$precio,'$edit','$enlace')";

			if(mysqli_query($conexion,$consulta)){
				?>
				<html>
					<script>	
						window.alert("Datos Guardados Correctamente");
					</script>
				</html>
			<?php
			}else{
				?>
				<html>
					<script>	
						window.alert("Ha ocurrido un error al Guardar Intente de Nuevo!");
					</script>
				</html>
			<?php	
			}
		}
	?>
			<?php
				$consulta ="SELECT titulo,autor,precio,editorial,enlace FROM libros";

				$registros=mysqli_query($conexion,$consulta);
				 //var_dump($registros);
				if($registros->num_rows>0){
					while($fila = $registros -> fetch_assoc()){
						echo "<tr>";
							echo "<td>" . $fila["titulo"] . "</td>";
							echo "<td>" . $fila["autor"] . "</td>";
							echo "<td>" . $fila["editorial"] . "</td>";
							echo "<td>" . $fila["enlace"] . "</td>";
						echo "</tr>";
					}
				}

				desconectar($conexion);
			?>
	</table>
	</div>
	</main>
</body>
</html>
