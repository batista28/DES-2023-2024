<!DOCTYPE html>
<html>

<head>
    <title>Generador de Tablas</title>
</head>

<body>
    <h1>Generador de Tablas</h1>

    <form action="Ejercicio6.php" method="post">
        <label for="columnas">Columnas:</label>
        <input type="text" name="columnas" required>

        <label for="filas">Filas:</label>
        <input type="text" name="filas" required>

        <label for="color">Color de fondo:</label>
        <input type="text" name="color" required>

        <br>

        <input type="checkbox" name="edad"> Edad
        <input type="checkbox" name="sexo"> Sexo
        <input type="checkbox" name="observaciones"> Observaciones

        <br><br>

        <input type="submit" value="Generar Tabla">
    </form>
</body>

</html>
