<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ayuda</title>
</head>

<body>
    <form action="logica.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="edad">Edad:</label>
        <select id="edad" name="edad" required>
            <option value="">Selecciona una opción</option>
            <?php
            for ($i = 0; $i <= 100; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>

        <label>Estado:</label><br>
        <input type="radio" id="soltero" name="estado" value="soltero" required>
        <label for="soltero">Soltero</label><br>
        <input type="radio" id="casado" name="estado" value="casado" required>
        <label for="casado">Casado</label><br><br>

        <label for="sueldo">Rango de Sueldo:</label>
        <select id="sueldo" name="sueldo" required>
            <option value="">Selecciona una opcion</option>
            <?php
            for ($i = 0; $i <= 50000; $i += 10000) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>

        <label for="hijos">Hijos:</label><br>
        <textarea id="hijos" name="hijos" rows="4" cols="50" required></textarea><br><br>

        <label for="domicilios">Domicilios:</label><br>
        <textarea id="domicilios" name="domicilios" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>