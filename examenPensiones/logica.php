<?php

// Obtener datos del formulario
$nombre = $_POST['nombre']; // Se obtiene el valor del campo 'nombre' del formulario
$edad = $_POST['edad']; // Se obtiene el valor del campo 'edad' del formulario
$estado = $_POST['estado']; // Se obtiene el valor del campo 'estado' del formulario
$sueldo = $_POST['sueldo']; // Se obtiene el valor del campo 'sueldo' del formulario
$hijosTexto = $_POST['hijos']; // Se obtiene el valor del campo 'hijos' del formulario
$domiciliosTexto = $_POST['domicilios']; // Se obtiene el valor del campo 'domicilios' del formulario

// Funciones para evaluar domicilios y hijos
function cumpleDomicilio($textoCasas)
{
    // Se divide el texto en líneas individuales
    $lineas = explode("\n", $textoCasas);

    // Se inicializan variables de control
    $casasDistintas = true;
    $maxCasas = true;

    // Se crea un arreglo para almacenar las provincias encontradas
    $provincias = array();
    foreach ($lineas as $linea) {
        $datos = explode(" ", $linea);
        $provincia = $datos[0];

        // Se verifica si la provincia ya ha sido encontrada
        if (in_array($provincia, $provincias)) {
            $casasDistintas = false;
        } else {
            $provincias[] = $provincia;
        }

        // Se verifica si se supera el límite máximo de casas por provincia
        if (count($provincias) >= 2) {
            $maxCasas = false;
        }
    }

    // Se almacenan los resultados en un arreglo
    $resultados["casasDistintas"] = $casasDistintas;
    $resultados["maxCasas"] = $maxCasas;

    return $resultados;
}

function cumpleHijos($textoHijos)
{
    // Se divide el texto en líneas individuales
    $lineas = explode("\n", $textoHijos);

    // Se inicializan variables de control
    $cumpleCondiciones = false;
    $totalEdades = 0;
    $totalHijos = count($lineas);

    // Se procesa cada línea de datos de hijos
    foreach ($lineas as $linea) {
        $datos = explode(" ", $linea);
        $edad = $datos[1];
        $sexo = $datos[2];
        $minusvalia = $datos[3];

        // Se verifica si el hijo cumple las condiciones de edad o minusvalía
        if ($edad < 14 || $minusvalia == 'S') {
            $cumpleCondiciones = true;
        }

        // Se suma la edad del hijo al total de edades
        $totalEdades += $edad;
    }

    // Se calcula la media de edades de los hijos
    $media = $totalHijos > 0 ? $totalEdades / $totalHijos : 0;

    // Se almacenan los resultados en un arreglo
    $resultados["cumpleCondiciones"] = $cumpleCondiciones;
    $resultados["media"] = $media;

    return $resultados;
}

// Se ejecutan las funciones de evaluación para domicilios y hijos
$resultadosDomicilio = cumpleDomicilio($domiciliosTexto);
$resultadosHijos = cumpleHijos($hijosTexto);

// Se establecen condiciones adicionales
$condicionEdad = $edad >= 18;
$condicionEstado = $estado == 'casado';
$condicionSueldo = $sueldo > 10000 && $sueldo < 30000;

// Se imprimen los resultados de las evaluaciones
echo "Resultados Domicilio: <br>";
echo "Casas Distintas: " . ($resultadosDomicilio["casasDistintas"] ? "Cumple" : "No cumple") . "<br>";
echo "Max Casas: " . ($resultadosDomicilio["maxCasas"] ? "Cumple" : "No cumple") . "<br>";

echo "<br>";

echo "Resultados Hijos: <br>";
echo "Cumple Condiciones: " . ($resultadosHijos["cumpleCondiciones"] ? "Cumple" : "No cumple") . "<br>";
echo "Media de Edad: " . $resultadosHijos["media"] . "<br>";

echo "<br>";

// Se imprimen las condiciones adicionales establecidas
echo "Condiciones adicionales: <br>";
echo "Mayor de edad: " . ($condicionEdad ? "Cumple" : "No cumple") . "<br>";
echo "Casado: " . ($condicionEstado ? "Cumple" : "No cumple") . "<br>";
echo "Sueldo entre 10000 y 30000: " . ($condicionSueldo ? "Cumple" : "No cumple") . "<br>";

// Se realiza una evaluación final basada en todas las condiciones
if ($resultadosDomicilio["casasDistintas"] && $resultadosDomicilio["maxCasas"] && $resultadosHijos["cumpleCondiciones"] && $condicionEdad && $condicionEstado && $condicionSueldo) {
    echo "<p style='color:green;'>Puede obtener una ayuda</p>";
} else {
    echo "<p style='color:red;'>No cumple con todos los requisitos para obtener una ayuda.</p>";
}
?>