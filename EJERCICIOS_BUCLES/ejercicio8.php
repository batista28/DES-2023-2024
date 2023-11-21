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
    // Obtener el código del menú del formulario
    if (isset($_POST['menuCodigo'])) {
        $menuCodigo = $_POST['menuCodigo'];

        // Dividir el código del menú en partes
        $menuParts = explode('-', $menuCodigo);

        // Obtener información del menú
        $orden = $menuParts[0];
        $nombreMenu = $menuParts[1];
        $colorLetra = $menuParts[2];
        $urlDestino = $menuParts[3];

        // Imprimir menú superior
        echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
        echo '<a class="navbar-brand" style="color:' . $colorLetra . ';" href="' . $urlDestino . '">' . $nombreMenu . '</a>';
        echo '</nav>';

        // Imprimir menú inferior
        echo '<nav class="navbar navbar-light bg-light fixed-bottom">';
        echo '<a class="navbar-brand" style="color:' . $colorLetra . ';" href="' . $urlDestino . '">' . $nombreMenu . '</a>';
        echo '</nav>';
    } else {
        // Mostrar mensaje de error si no se proporciona un código de menú
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