<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Vista de Participaciones</title>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Vista por crear</title>
</head>

<body>
    <form action="../controller/lista_participaciones.php" method="post">
        <h5>DireccionesBD:</h5>

        <select name='jugador'>
            <option value=-1 default>Todos</option>

            <?php

            foreach ($paises as $pais) {
                echo "<option value='" . $pais['id'] . "'>" . $pais['nombre'] . "</option>";
            }
            ;
            ?>
        </select>
        <select name='provincia'>
            <option value=-1 default>Todas</option>

            <?php

            foreach ($provincias as $provincia) {
                echo "<option value='" . $provincia['codProv'] . "'>" . $provincia['nombre'] . "</option>";
            }
            ;

            ?>
        </select>

        <button type="submit">buscar</button>

    </form>
    <div class=" container-sm">
        <table class="table">

            <tbody>
                <?php foreach ($direcciones as $direccion): ?>
                    <tr>
                        <th>Calle:</th>
                        <td>
                            <?php echo $direccion['Calle']; ?>,
                        </td>
                        <th> Número:</th>
                        <td>
                            <?php echo $direccion['Numero']; ?>,
                        </td>
                        <th>Código Postal:</th>
                        <td>
                            <?php echo $direccion['Codigo_postal']; ?>,
                        </td>
                        <th> Provincia:</th>
                        <td>
                            <?php echo $direccion['nombreProv']; ?>,

                        </td>
                        <th> País:</th>
                        <td>
                            <?php echo $direccion['nombrePais']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</body>

</html>

<body>
    <h1>Participaciones en Torneos de Ajedrez</h1>

    <form action="../controller/lista_participaciones.php.php" method="post">
        <label for="jugador">Selecciona un jugador:</label>
        <select name="jugador" id="jugador">
            <?php foreach ($jugadores as $jugador): ?>
                <option value="<?php echo $jugador['id']; ?>">
                    <?php echo $jugador['nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="torneo">Selecciona un torneo:</label>
        <select name="torneo" id="torneo">
            <?php foreach ($torneos as $torneo): ?>
                <option value="<?php echo $torneo['id']; ?>">
                    <?php echo $torneo['nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Buscar</button>
    </form>

    <h2>Participaciones:</h2>
    <div class="container-sm">
        <table class="table">
            <thead>
                <tr>
                    <th>Jugador</th>
                    <th>Torneo</th>
                    <th>Puntuación</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($participaciones as $participacion): ?>
                    <tr>
                        <td>
                            <?php echo $participacion['nombre_jugador']; ?>
                        </td>
                        <td>
                            <?php echo $participacion['nombre_torneo']; ?>
                        </td>
                        <td>
                            <?php echo $participacion['puntuacion']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>