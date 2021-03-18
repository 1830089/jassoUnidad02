<?php 
	require'login/sesion.php';
	?>
<!DOCTYPE html>
<html>
<?php 
	require'php/menu.php';
	$server='localhost';
	$user='root';
	$pass='';
	$bd='Roux';

	$conexion= mysqli_connect($server,$user,$pass,$bd);

	$consulta= 'SELECT nombre, info, img FROM asistentes ';

	$registros= mysqli_query($conexion,$consulta);
?>
			<div class="principal-A">
				<main>
					<section class="seccion1">
						<h2 class="subtitulo">About the Event</h2>
						<p>The Roux Academy’s annual conference and exhibit is designed to foster a close-knit relationship amongst artists at various universities around the world. But sign up early, as this not-to-miss conference sells out quickly, and the waiting list is long. In addition, art students are encouraged to send in works from their school portfolios to be considered for hanging in the CAC exhibit halls, as well as to be selected as a Featured Artist.</p>
					</section>
					<table border="2">
                    <thead>
                        <tr>
                             <th> NOMBRE </th>
                             <th>&nbsp;INFO </th>
                      </tr>
					</thead>
					<tbody>
						<?php
							include("./login/loginbd.php");
							$query = "SELECT * FROM asistentes";
							$resultado= $conexion->query($query);
							while($row = $resultado->fetch_assoc()){
								?>

								<tr>
									<td><?php echo $row['nombre'];?></td>
									<td><?php echo $row['info'];?></td>
								</tr>






								<?php
							}
						?>
					</tbody>
                    </table>
				</main>
				<aside>
					<?php require 'php/fArtist.php'; ?>
				</aside>
			</div>
			
	</div>
	<?php require 'php/footer.php';?>
</body>
</html>