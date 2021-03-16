<?php 
	require'login/sesion.php';
	?>
<!DOCTYPE html>
<html>
<body>
<?php 
	require'php/menu.php';
    include("./login/loginbd.php");
    $id=$_REQUEST['id'];
	$query = "SELECT * FROM artista WHERE id_art='$id'";
	$resultado= $conexion->query($query);
	$row = $resultado->fetch_assoc();
								?>
			<div class="principal-A">
				<main>
					<h2 class="subtitulo">Modificar</h2>
					<section class="artist-desc-S">
						<p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below.</p>
					</section>
					<h4>Personal Info</h4>
					<form action="pro_modificar.php?id=<?php echo $row['id_art']; ?>" method="POST" enctype="multipart/form-data">
						<div class="txt">
							<label>Nombre: </label>
							<input REQUIRED type="text" name="nombre" id="nombre" placeholder="Last,First" value="<?php echo $row['nombre'];?>">	
						</div>

						<div class="desc">
                            <br>
							<label> información</label>
							<input REQUIRED type="text" name="info" id="info" placeholder="información" value="<?php echo $row['info'];?>">
                            <br>	
						</div>

                        <div class="txt">
                            <br>    
							<label>Imagen: </label>
                            <br>
                            <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['img']); ?>">
                            <br>
						</div>

						<div class="boton">	
							<br>
							<input REQUIRED type="file" name="imagen">
							<br>
						</div>
						<input type="submit" name="enviar" value="Aceptar">
					</form>
				</main>
				<aside>
					<?php require 'php/fArtist.php';?>
				</aside>
			</div>
			<footer>
					<div class="Flogo">
					<img src="img/ralogo_monogram.png" class="Fimg" >
					<p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for three days of lectures by world-renowned art scholars and artists.</p>
					</div>
					<div class ="footer">
						<ul>
							<li> <a href="about.html">About the Roux Academy</a></li>
							<li>|</li>
							<li> <a href="privacy.html">Privacy Policy</a></li>
							<li>|</li>
							<li> <a href="index.html">Visit our website</a></li>
						</ul>
					</div>
			</footer>
	</div>

</body>
</html>