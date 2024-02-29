<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Confirmación de Inserción de Producto</title>
    <!-- Agrega aquí tus enlaces a Bootstrap u otros estilos CSS -->
</head>

<body>
    <h1>Confirmación de Inserción de Producto</h1>
    <p>El producto se ha insertado correctamente con los siguientes detalles:</p>
    <ul>
        <li><strong>Nombre:</strong>
            <?php echo $producto['nombre']; ?>
        </li>
        <li><strong>Descripción:</strong>
            <?php echo $producto['descripcion']; ?>
        </li>
        <li><strong>Peso:</strong>
            <?php echo $producto['peso']; ?>
        </li>
        <li><strong>Tamaño:</strong>
            <?php echo $producto['tamano']; ?>
        </li>
        <li><strong>Cantidad:</strong>
            <?php echo $producto['cantidad']; ?>
        </li>
        <li><strong>Precio:</strong>
            <?php echo $producto['precio']; ?>
        </li>
        <li><strong>Color:</strong>
            <?php echo $producto['color']; ?>
        </li>
        <li><strong>Categoría:</strong>
            <?php echo $producto['categoria']; ?>
        </li>
    </ul>
    <a href="Vinsertar_producto.php">Insertar otro producto</a>
</body>

</html>