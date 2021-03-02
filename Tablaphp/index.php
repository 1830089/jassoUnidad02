<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <link rel="stylesheet" href="CSS/styles.css" type="text/css">
</head>
<body >

    <div style = "float: right;"  class="cont">
    <h1>Tablas de multiplicar</h1>
<h3>Escribe un número a multiplicar y hasta que multiplo ocupas</h3>
<form action="#" method="post">
   <p>Escribe aquí el número: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p>Escribe aquí hasta que multiplo: <input type="text" name="multiplo" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Ver tabla de multiplicar." /></p>
</form>
<?php  
    $n=$_POST['num'];
    $mul= $_POST['multiplo'];
     echo "<h4>Tabla del $n:</h4>";
     $i=1;
     while ($i<=$mul) {
           echo "$n x $i = ".$n*$i."<br/>";
           $i++;
           } 
    ?>
    </div>
    
</body>
</html>