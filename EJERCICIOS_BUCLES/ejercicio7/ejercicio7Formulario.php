<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulario de Cumpleaños</title>
</head>

<body>

    <div class="container mt-5">
        <form action="ejercicio7.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de Cumpleaños:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="hora">Hora de Cumpleaños:</label>
                <input type="time" class="form-control" id="hora" name="hora" required>
            </div>

            <button type="submit" class="btn btn-primary">Calcular y Mostrar Mensaje</button>
        </form>
    </div>

</body>

</html>
