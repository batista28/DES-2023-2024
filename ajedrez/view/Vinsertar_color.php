<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Insertar Producto</title>
    <!-- Agrega aquí tus enlaces a Bootstrap u otros estilos CSS -->
</head>

<body>
    <h1>Insertar Nuevo Producto</h1>
    <form action="Cinsertar_producto.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br><br>

        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso" min="0" required><br><br>

        <label for="tamano">Tamaño:</label>
        <input type="number" id="tamano" name="tamano" min="0" max="1000" required><br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" min="0" required><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" min="0" required><br><br>

        <label for="idColor">Color:</label>
        <select id="idColor" name="idColor">
            <?php foreach ($colores as $color): ?>
                <option value="<?php echo $color['idColor']; ?>">
                    <?php echo $color['nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="idCategoria">Categoría:</label>
        <select id="idCategoria" name="idCategoria">
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?php echo $categoria['idCategoria']; ?>">
                    <?php echo $categoria['nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <input type="submit" value="Insertar Producto">
    </form>
</body>

</html>