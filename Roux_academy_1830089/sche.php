<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<div class="con">
<div>	
	<?php
		include 'header.php';

	?>
	<div class="mart2">
	<main>
		<section>
			<h2>Schedule</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<br>
			<p>_________________________________________________________________</p>
		</section>
		<section>
			<h3>Monday, March 7, 2016</h3>
            <h1 style="font-size: 50px">Art in Full Color</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</section>
		<section class="s">
			<img src="images/artists/LaVonne_LaRue_tn.jpg">
			<div class="s2">
                 	<h1>Art in Unexpected Places</h1>
                    <h4 class="gris2">09:30-10:30am: Elizabeth Hall</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
            </div>
		</section>
		<section class="s">
			<img src="images/artists/Constance_Smith_tn.jpg">
			<div class="s2">
			<h1>Art in Full Bloom</h1>
            <h4 class="gris2">11:00am-1pm: Victoria Hall</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
        	</div>
		</section>
		<section class="s">
			 <img src="images/artists/Riley_Rewington_tn.jpg">
			 <div class="s2">
			 <h1>Still Life</h1>
             <h4 class="gris2">2:30-4:00pm: Dennison Hall</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
            </div>
		</section>
		<p>_________________________________________________________________</p>
		<section>
			<h3>Tuesday March 8, 2016</h3>
			<div class="2">
            <h1>Water in Art</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            </div>
		</section>

		<section class="s">
			<img src="images/artists/Jennifer_Jerome_tn.jpg">
			<div class="s2">
			<h1>Water in Art Kickoff Session</h1>
            <h4 class="gris2">09:30-10:30am: Elizabeth Hall</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            </div>
		</section>

		<section class="s">
			<img src="images/artists/Jonathan_Ferrar_tn.jpg">
			<div class="s2">
			<h1>Ice Sculptures</h1>
            <h4 class="gris2">10:30am-1pm: Fountain of Intrigue</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            </div>
		</section>

		<section class="s">
			<img src="images/artists/Hillary_Goldwynn_tn.jpg">
			<div class="s2">
			<h1>Deep Sea Wonders</h1>
            <h4 class="gris2">2:30-4:00pm: Dennison Hall</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
        	</div>
		</section>

	</main>
	<aside>
		<<?php
		include 'artistas.php';

	?>
        <br>
        <?php
		include 'telefono.php';

	?>
	</aside>
</div>
	<?php
		include 'footer.php';

	?>
</div>
</body>
</html>