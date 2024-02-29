<?php
/**/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $categoria = $_POST["categoria"];
    $digital = $_POST["digital"];
    $desarrollador = $_POST["desarrollador"];
    $precio = $_POST["precio"];
    $fecha_lanzamiento = $_POST["fecha_lanzamiento"];
    $fases = $_POST["fases"];
    $almacenes = $_POST["almacenes"];

    function calcularDuracionTotal($fases)
    {
        $lineas = explode("\n", $fases);
        $duracionTotal = 0;
        foreach ($lineas as $linea) {
            $datos = explode(" ", $linea);
            if (count($datos) >= 2) {
                $duracionTotal += intval($datos[1]);
            }
        }
        return $duracionTotal;
    }

    function calcularUnidadesDisponibles($digital, $almacenes)
    {
        if ($digital == "si") {
            return "Ilimitadas";
        } else {

            $lineasAlmacenes = explode("\n", $almacenes);

            $totalUnidades = 0;

            foreach ($lineasAlmacenes as $linea) {

                $datosAlmacen = explode(" ", $linea);

                $cantidadUnidades = intval($datosAlmacen[2]);
                $totalUnidades += $cantidadUnidades;

            }
            return $totalUnidades;
        }
    }

    function calcularPrecio($precio, $digital, $almacenes, $desarrollador, $unidadesDisponibles)
    {
        $precioFinal = intval($precio);

        if ($digital == "si") {
            $precioFinal *= 0.8;
        }

        $duracionTotal = calcularDuracionTotal($_POST["fases"]);
        if (($desarrollador == "Nintendo" || $desarrollador == "Rockstar") && $duracionTotal > 1200) {
            $precioFinal += 5;
        }
        if ($unidadesDisponibles < 20) {
            $precioFinal *= 1.2;
        }
        return $precioFinal;
    }

    function calcularStockPorProvincia($almacenes)
    {
        $lineasAlmacenes = explode("\n", $almacenes);
        $stockPorProvincia = array();

        foreach ($lineasAlmacenes as $linea) {
            $datosAlmacen = explode(" ", $linea);
            $provincia = $datosAlmacen[0];
            $cantidadUnidades = intval($datosAlmacen[2]);

            if (!isset($stockPorProvincia[$provincia])) {
                $stockPorProvincia[$provincia] = 0;
            }
            $stockPorProvincia[$provincia] += $cantidadUnidades;
        }

        return $stockPorProvincia;
    }

    $duracionTotal = calcularDuracionTotal($fases);
    $unidadesDisponibles = calcularUnidadesDisponibles($digital, $almacenes);
    $precioFinal = calcularPrecio($precio, $digital, $almacenes, $desarrollador, $unidadesDisponibles);
    $stockPorProvincia = calcularStockPorProvincia($almacenes);

    echo "Numero de Fases: " . count(explode("\n", $fases)) . "<br>";
    echo "Duracion total del videojuego: " . $duracionTotal . " min<br>";
    echo "Cantidad de Unidades Disponibles: " . $unidadesDisponibles . "<br>";
    echo "Precio: " . $precioFinal . " euros<br>";

    // Mostrar el stock por provincia
    echo "Stock por Provincia:<br>";
    foreach ($stockPorProvincia as $provincia => $stock) {
        echo "$provincia: $stock<br>";
    }
}
?>