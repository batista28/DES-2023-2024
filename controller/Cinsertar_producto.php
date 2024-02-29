<?php
// Cinsertar_producto.php

// Incluir el modelo de Producto
require_once('../model/producto.php');

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $peso = $_POST['peso'];
    $tamano = $_POST['tamano'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $idColor = $_POST['idColor'];
    $idCategoria = $_POST['idCategoria'];

    // Validar los datos (aquí se pueden realizar más validaciones según tus requisitos)

    // Crear un array con los datos del producto
    $datos_producto = array(
        'nombre' => $nombre,
        'descripcion' => $descripcion,
        'peso' => $peso,
        'tamano' => $tamano,
        'cantidad' => $cantidad,
        'precio' => $precio,
        'idColor' => $idColor,
        'idCategoria' => $idCategoria
    );

    // Insertar el producto en la base de datos
    $producto = new Producto();
    $resultado = $producto->AddProducto($datos_producto);

    // Verificar si la inserción fue exitosa
    if ($resultado === 1) {
        // Inserción exitosa, redirigir con un mensaje de éxito
        header("Location: ../view/Vinsertar_producto.php?success=true");
        exit();
    } else {
        // Error al insertar, redirigir con un mensaje de error
        header("Location: ../view/Vinsertar_producto.php?error=true");
        exit();
    }
} else {
    // Si no se ha enviado el formulario, redirigir a la página de inserción de producto
    header("Location: ../view/Vinsertar_producto.php");
    exit();
}
?>