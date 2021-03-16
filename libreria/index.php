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
        <h1>Lista de libros</h1>
        <a href="registrar.php">Nuevo registro</a>

        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Enlace</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    require('conexion.php');

                    $conexion = conectar();
                    $consulta = "SELECT * FROM libros";
                    $registros = mysqli_query($conexion, $consulta);

                    if ($registros->num_rows > 0) {
                        while ($fila = $registros->fetch_assoc()) {
                            echo "<tr><td>" . $fila['titulo'] . "</td>" . "<td>" . $fila['autor'] . "</td>" . "<td>" . $fila['editorial'] . "</td>" . "<td>" . $fila['enlace'] . "</td><tr>";
                        }
                    }
                    //desconectar($conexion);
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>