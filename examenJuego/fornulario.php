<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Videojuego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <h2>Formulario de Videojuego</h2>
    <form action="logica.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="categoria">Categoría:</label>
        <select id="categoria" name="categoria">
            <option value="aventura">Aventura</option>
            <option value="plataformas">Plataformas</option>
            <option value="shooter">Shooter</option>
        </select><br><br>

        <label for="digital">Digital:</label>
        <input type="radio" id="digital" name="digital" value="si">Sí
        <input type="radio" id="digital" name="digital" value="no">No<br><br>

        <label for="desarrollador">Desarrollador:</label>
        <input type="text" id="desarrollador" name="desarrollador"><br><br>

        <label for="precio">Precio:</label>
        <select id="precio" name="precio">
            <?php
            for ($i = 1; $i <= 150; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>

        <label for="fecha_lanzamiento">Fecha de Lanzamiento:</label>
        <input type="date" id="fecha_lanzamiento" name="fecha_lanzamiento"><br><br>

        <label for="fases">Fases:</label>
        <textarea id="fases" name="fases" rows="4" cols="50"></textarea><br><br>

        <label for="almacenes">Almacenes:</label>
        <textarea id="almacenes" name="almacenes" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Solicitar">
    </form>
</body>

</html>