<?php 
	require'login/sesion.php';
	?>
<!DOCTYPE html>
<html>
<?php 
	require'php/menu.php';?>
			<div class="principal-A">
				<main>
					<h2 class="subtitulo">Register</h2>
					<section class="artist-desc-S">
						<p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below.</p>
					</section>
					<h4>Personal Info</h4>
					<form action="artistas.php" method="POST" enctype="multipart/form-data">
						<div class="txt">
							<label>Nombre: </label>
							<input REQUIRED type="text" name="nombre" id="nombre" placeholder="Last,First">	
						</div>

						<div class="desc">
							<label> información</label>
							<input REQUIRED type="text" name="info" id="info" placeholder="información">	
							
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