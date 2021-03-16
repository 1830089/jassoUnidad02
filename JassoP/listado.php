<?php 
	require'login/sesion.php';
	?>
<!DOCTYPE html>
<html>
<?php 
	require'php/menu.php';?>
			<div class="principal-A">
				<main>
					<center><h2 class="subtitulo">Listado</h2></center>
					<table border="2">
                    <thead>
                        <tr>
                             <th style="width:180px;">FOTO</th>
                             <th> NOMBRE </th>
                             <th>&nbsp;INFO </th>
                             <th style="width:60px;"></th>
                             <th style="width:60px;"></th>
                      </tr>
					</thead>
					<tbody>
						<?php
							include("./login/loginbd.php");
							$query = "SELECT * FROM artista";
							$resultado= $conexion->query($query);
							while($row = $resultado->fetch_assoc()){
								?>

								<tr>
									<td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['img']); ?>"></td>
									<td><?php echo $row['nombre'];?></td>
									<td><?php echo $row['info'];?></td>
									<th><a href="modificar.php?id=<?php echo $row['id_art'];?>">Modificar</a></th>
									<th><a href="eliminar.php?id=<?php echo $row['id_art'];?>">Eliminar</a></th>

								</tr>






								<?php
							}
						?>
					</tbody>
                    </table>
				</main>

			</div>
	</div>

</body>
</html>