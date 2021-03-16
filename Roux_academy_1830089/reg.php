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
                <section class="register">
                    <h1>Register</h1>
                    <p>To attend the Roux Academy 2016 Contemporary Art Conference, 
                        please complete the information below.
                    </p>
                </section>

                <section class="PersonalInfo">
                    <h2>Personal Info</h2>
                    <br>
                    <label for="">Name*</label>
                    <input type="text" placeholder="Last, First" >
                    <br>
                    <label for="">Company Name</label>
                    <input type="text" >
                    <br>
                    <label for="">Email*</label>
                    <input type="email" name="" id="">
                </section>

                <section class="RequestTime">
                    <h2>Request Time</h2>
                    <div>
                        <input type="radio" name="" id=""> Question
                    </div>
                    <div>
                        <input type="radio" name="" id=""> Comment
                    </div>

                </section>

                <section class="Comment">
                    <h2>Comment</h2>
                    <textarea name="" id="" cols="40" rows="5"></textarea>
                </section>

                <section class="suscrib">
                    <input type="checkbox" name="" id="">Subscribe to our mailing list?
                    <br>
                    <br>
                    <h3>How did you hear about us?</h3>
                </section>

                <section class="selec">
                    <select name="" id="">
                        <option selected>Choose...</option>
                        <option value="">Choose...</option>
                        <option value="">A friend</option>
                        <option value="">Facebook</option>
                        <option value="">Twitter</option>
                    </select>
                    <input type="submit" value="aceptar" name="enviar">
                </section >


            </main>
	<aside>
    <?php
		include 'artistas.php';

	?>
        <br>
       </aside>
       </div>
       <?php
		include 'footer.php';

	    ?>
</body>
</html>