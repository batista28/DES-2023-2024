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
    <form action="../controller/subControllerRamon.php" method="post">
        <h5>DireccionesBD:</h5>

        <select name='pais'>
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