<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Menús y Grid</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <form method="post" action="ejercicio8.php">
        <div class="form-group">
            <label for="menus">Codificación de Menús:</label>
            <textarea class="form-control" name="menus" rows="5"></textarea>
        </div>


        <div class="form-group">
            <label>Selecciona los elementos del grid:</label>
            <?php
            // Generar el grid de checkbox dinámicamente
            $gridSize = 4; // Se puede ajustar según sea necesario
            for ($i = 1; $i <= $gridSize; $i++) {
                echo "<div class='form-check form-check-inline'>";
                for ($j = 1; $j <= $gridSize; $j++) {
                    $checkboxName = "checkbox_{$i}_{$j}";
                    echo "<input type='checkbox' class='form-check-input' name='{$checkboxName}'>";
                    echo "<label class='form-check-label'>{$i},{$j}</label>";
                }
                echo "</div><br>";
            }
            ?>
        </div>

        <button type="submit" class="btn btn-primary">Generar Menús y Tabla</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
