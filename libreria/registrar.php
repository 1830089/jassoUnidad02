
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="" method="get">
            <div>
                <label for="titulo" class="etiquetas">Titulo:</label>
                <input type="text" class="controles" name="titulo" required>
            </div>

            <div>
                <label for="autor" class="etiquetas">Autor:</label>
                <input type="text" class="controles" name="autor" required>
            </div>

            <div>
                <label for="editorial" class="etiquetas">Editorial:</label>
                <input type="text" class="controles" name="editorial" required>
            </div>

            <div>
                <label for="enlace" class="etiquetas">Enlace:</label>
                <input type="text" class="controles" name="enlace" required>
            </div>

            <input type="submit" value="Aceptar">
        </form>
    </main>

    <?php
    require('conexion.php');

    if ($_GET["titulo"]) {
        $conexion = conectar();
        $titulo = $_GET["titulo"];
        $autor = $_GET["autor"];
        $editorial = $_GET["editorial"];
        $enlace = $_GET["enlace"];


        if ($conexion) {
            $consulta = "INSERT INTO libros VALUES(\"$titulo\", \"$autor\", \"$editorial\", \"$enlace\")";
            mysqli_query($conexion, $consulta);
        }

        desconectar($conexion);
        header("Location:index.php");
    }
?>

</body>
</html>