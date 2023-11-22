<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Página de Destino</title>
</head>

<body>

    <?php
    if (isset($_POST['menuCodigo'])) {
        $menuCodigo = $_POST['menuCodigo'];
        $menuParts = explode('-', $menuCodigo);

        $nombreMenu = $menuParts[2];
        $colorLetra = $menuParts[3];
        $urlDestino = $menuParts[4];

        echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
        echo '<a class="navbar-brand" style="color:' . $colorLetra . ';" href="' . $urlDestino . '">' . $nombreMenu . ' (Superior)</a>';
        echo '</nav>';

        echo '<div class="container mt-3">';
        echo '<h3>Tabla Generada a partir del Grid de Checkbox:</h3>';
        echo '<table class="table table-bordered">';

        // Procesar el grid de checkbox y generar la tabla
        if (isset($_POST['checkbox'])) {
            $checkboxArray = $_POST['checkbox'];
            $maxHeight = count($checkboxArray);
            $maxWidth = 0;

            foreach ($checkboxArray as $row) {
                $maxWidth = max($maxWidth, count($row));
            }

            for ($i = 0; $i < $maxHeight; $i++) {
                echo '<tr>';
                for ($j = 0; $j < $maxWidth; $j++) {
                    $cellColor = isset($checkboxArray[$i][$j]) ? 'background-color: #c8e6c9;' : '';
                    echo '<td style="' . $cellColor . '">[' . $i . ',' . $j . ']</td>';
                }
                echo '</tr>';
            }
        }

        echo '</table>';
        echo '</div>';
    } else {
        echo '<div class="container mt-5">';
        echo '<div class="alert alert-danger" role="alert">¡Error! No se proporcionó un código de menú.</div>';
        echo '</div>';
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>