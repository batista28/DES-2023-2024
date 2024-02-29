<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica si el formulario se envió con el método POST

    // Recopilación de datos del formulario
    $nombre = $_POST['nombre']; // Obtiene el nombre del formulario
    $fisica = isset($_POST['fisica']) ? $_POST['fisica'] : "no"; // Verifica si se marcó la casilla de física
    $direccion = $_POST['direccion']; // Obtiene la dirección del formulario
    $provincia = $_POST['provincia']; // Obtiene la provincia seleccionada en el formulario
    $presupuesto = $_POST['presupuesto']; // Obtiene el presupuesto del formulario
    $fecha_apertura = $_POST['fecha_lanzamiento']; // Obtiene la fecha de apertura del formulario
    $tomos_manga = $_POST['tomos']; // Obtiene los tomos de manga ingresados en el formulario

    // Separar los datos de los tomos de manga en un array
    $datosTomos = explode("\n", $tomos_manga);

    // Variables para almacenar estadísticas
    $volumenesTotales = 0; // Inicializa la variable para el número total de volúmenes
    $unidades_xls_disponibles = 0; // Inicializa la variable para la cantidad de unidades XLS disponibles
    $hay_stock_coleccionista = false; // Inicializa la variable para verificar si hay stock de edición coleccionista
    $stock_por_provincia = array(); // Inicializa el array para almacenar el stock por provincia

    // Función para calcular el stock de manga por provincia
    function calcularStockPorProvincia($datosTomos)
    {
        $stock = array(); // Inicializa el array para almacenar el stock por provincia
        foreach ($datosTomos as $tomos) { // Itera sobre cada tomo de manga
            $tomo = explode(",", $tomos); // Divide los datos del tomo por coma
            $almacen_provincia = trim(end($tomo)); // Obtiene la provincia del tomo
            $cantidad = intval($tomo[3]); // Convierte la cantidad a entero
            if (isset($stock[$almacen_provincia])) { // Verifica si ya existe una entrada para la provincia
                $stock[$almacen_provincia] += $cantidad; // Incrementa el stock de la provincia
            } else {
                $stock[$almacen_provincia] = $cantidad; // Agrega una nueva entrada para la provincia
            }
        }
        return $stock; // Devuelve el array con el stock por provincia
    }

    // Bucle para procesar los datos de los tomos de manga
    foreach ($datosTomos as $tomos) {
        $tomo = explode(",", $tomos); // Divide los datos del tomo por coma
        $volumenesTotales += intval($tomo[3]); // Suma las cantidades de todos los tomos
        if (intval($tomo[2]) > 300 && strtoupper(trim($tomo[5])) === 'S') { // Verifica las condiciones para unidades XLS
            $unidades_xls_disponibles += intval($tomo[3]); // Incrementa la cantidad de unidades XLS disponibles
        }
        if (strtoupper(trim($tomo[5])) === 'S' && $fisica === "si") { // Verifica si hay stock de edición coleccionista
            $hay_stock_coleccionista = true; // Establece la variable a verdadero si hay stock de edición coleccionista
        }
    }

    // Función para verificar si solo hay tomos en provincias colindantes con la tienda
    function cumpleCercania($datosTomos, $provinciaTienda)
    {
        $provinciasColindantes = ["Cádiz", "Sevilla", "Huelva", "Málaga"]; // Define las provincias colindantes
        foreach ($datosTomos as $tomos) { // Itera sobre cada tomo de manga
            $tomo = explode(",", $tomos); // Divide los datos del tomo por coma
            $almacenProvincia = trim(end($tomo)); // Obtiene la provincia del tomo
            if (!in_array($almacenProvincia, $provinciasColindantes) && $almacenProvincia != $provinciaTienda) { // Verifica si la provincia no está en las colindantes
                return false; // Devuelve falso si no se cumple la cercanía
            }
        }
        return true; // Devuelve verdadero si se cumplen las condiciones de cercanía
    }

    // Función para verificar el stock de un manga en almacenes de provincias colindantes
    function stockTomo($datosTomos, $provinciaTienda, $nombreManga)
    {
        $provinciasColindantes = ["Cádiz", "Sevilla", "Huelva", "Málaga"]; // Define las provincias colindantes
        $stockDisponible = 0; // Inicializa la variable para el stock disponible
        foreach ($datosTomos as $tomos) { // Itera sobre cada tomo de manga
            $tomo = explode(",", $tomos); // Divide los datos del tomo por coma
            $almacenProvincia = trim(end($tomo)); // Obtiene la provincia del tomo
            if (in_array($almacenProvincia, $provinciasColindantes) && (strpos($tomo[0], $nombreManga) !== false || strpos($tomo[1], $nombreManga) !== false)) { // Verifica las condiciones para el nombre del manga y la provincia colindante
                $stockDisponible += intval($tomo[3]); // Incrementa el stock disponible
            }
        }
        return $stockDisponible; // Devuelve el stock disponible
    }

    // Calcular el stock por provincia
    $stock_por_provincia = calcularStockPorProvincia($datosTomos);

    // Verificar si solo hay tomos en provincias colindantes con la tienda
    $cumpleCercania = cumpleCercania($datosTomos, $provincia);

    // Verificar el stock de One Piece en provincias colindantes
    $stockOnePiece = stockTomo($datosTomos, $provincia, "one piece");

    // Mostrar las estadísticas por pantalla
    echo "<h2>Estadisticas de los tomos manga</h2>"; // Título de las estadísticas
    echo "Número de Volumenes Totales (suma de stocks): " . $volumenesTotales . "<br>"; // Muestra el número total de volúmenes
    echo "Cantidad de Unidades XLS Disponibles (Más de 300 páginas y edición coleccionista): " . $unidades_xls_disponibles . "<br>"; // Muestra la cantidad de unidades XLS disponibles
    echo "Hay Stock Coleccionista: " . ($hay_stock_coleccionista ? "Sí" : "No") . "<br>"; // Muestra si hay stock de edición coleccionista
    echo "Stock por Provincia:<br>"; // Título del stock por provincia
    foreach ($stock_por_provincia as $provincia => $cantidad) { // Itera sobre el stock por provincia
        echo "- $provincia: $cantidad<br>"; // Muestra el stock por provincia
        echo "Cumple Cercanía: " . ($cumpleCercania ? "Sí" : "No") . "<br>"; // Muestra si se cumple la cercanía
        echo "Stock de 'One Piece' en provincias colindantes: " . $stockOnePiece . "<br>"; // Muestra el stock de One Piece en provincias colindantes
    }
}

?>