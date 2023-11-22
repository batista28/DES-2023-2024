<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulario de Menús y Grid</title>
</head>

<body>

    <div class="container mt-5">
        <form action="pagina_destino.php" method="post">
            <div class="form-group">
                <label for="menuCodigo">Código del Menú:</label>
                <input type="text" class="form-control" id="menuCodigo" name="menuCodigo" required>
            </div>

            <div class="form-check">
                <label>Grid de Checkbox:</label>
                <?php
                // Generar dinámicamente el grid de checkbox 4x4
                for ($i = 0; $i < 4; $i++) {
                    echo '<div class="row">';
                    for ($j = 0; $j < 4; $j++) {
                        $id = 'checkbox_' . $i . '_' . $j;
                        echo '<div class="col">';
                        echo '<input type="checkbox" class="form-check-input" id="' . $id . '" name="checkbox[' . $i . '][' . $j . ']">';
                        echo '<label class="form-check-label" for="' . $id . '">[' . $i . ',' . $j . ']</label>';
                        echo '</div>';
                    }
                    echo '</div>';
                }
                ?>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Generar Menú y Tabla</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>