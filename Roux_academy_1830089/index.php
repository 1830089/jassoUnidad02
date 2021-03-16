<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<div class="con">
<div>	

	<?php
		include 'header.php';

	?>
	<div class="contenido">
	<main> 
		<section>
			<h2>About the Event</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<br>
		</section>
		<?php
		include 'artistas.php';

	?>
        	<h2>The Venue</h2>
        	<br>
        	<h3>Hotel Contempo</h3>
        	<img align="left" style="margin-right: 15px;"  src="images/hotel_contempo.JPG">
        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        	cillum dolore eu fugiat nulla pariatur. </p>
        </section>
	</main>
	<aside>
	<?php
		include 'telefono.php';

	?>	
	<article>
	<h2 >Schedule</h2>
            <br>
            <h3 class="gris">Monday</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat.</p>
             <br>
             <h3 class="gris">Tuesday</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat.</p>
             <p><a class="egris" href="">Full Schedule</a></p>
    </article>
	</aside>
	</div>
	<footer>
		<img class="imgf" src="images/ralogo_monogram.PNG">
		<p class="pf">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<nav class="navf">
			<ul>
				<li class="f3"><a class="f2"  href="">About the Roux |</a></li>
				<li class="f3"><a class="f2" href="">Privacy Policy |</a></li>
				<li class="f3"><a class="f2" href="">Visit Our Wibsite |</a></li>
			</ul>
		</nav>


	</footer>
</div>
</body>
</html>