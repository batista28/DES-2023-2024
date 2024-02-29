<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de tomos manga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <h2>Formulario de tomos manga</h2>
    <form action="logica.php" method="post">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>



        <label for="fisica">Fisica:</label>
        <input type="checkbox" id="fisica" name="fisica" value="si">Si
        <input type="checkbox" id="fisica" name="fisica" value="no">No<br><br>

        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion"><br><br>

        <label for="provincia">Provincia:</label>
        <select id="provincia" name="provincia">
            <option value="almeria">Almeria</option>
            <option value="cadiz">Cadiz</option>
            <option value="malaga">Malaga</option>
            <option value="jaen">Jaen</option>
            <option value="sevilla">Sevilla</option>
            <option value="huelva">Huelva</option>
            <option value="cordoba">Cordoba</option>
            <option value="granada">Granada</option>

        </select><br><br>
        <!-- presupuesto -->
        <label for="customRange3" class="form-label">Prespuesto</label>
        <input type="range" class="form-range" name="presupuesto" min="15" max="150" step="1" id="customRange3">

        <label for="fecha_lanzamiento">Fecha de Apertura:</label>
        <input type="date" id="fecha_lanzamiento" name="fecha_lanzamiento"><br><br>


        <label for="tomos">Tomos manga:</label>
        <textarea id="tomos" name="tomos" rows="4" cols="50"></textarea><br><br>



        <input type="submit" value="Enviar">
    </form>
</body>

</html>