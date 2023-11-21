<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];

    // Crear mensaje con la función personalizada
    $mensaje = obtenerMensajeCumpleanos($nombre, $fecha, $hora);

    // Mostrar mensaje
    echo $mensaje;
}

function obtenerMensajeCumpleanos($nombre, $fecha, $hora)
{
    // Convertir la fecha y hora a un formato manejable
    $fechaHoraCumpleanos = strtotime($fecha . ' ' . $hora);

    // Obtener la estación del año
    $estacion = obtenerEstacion($fechaHoraCumpleanos);

    // Obtener los días y horas restantes para las vacaciones de Navidad y Semana Santa del próximo año
    $diasHastaNavidad = obtenerDiasRestantes(strtotime('25 December'));
    $diasHastaSemanaSanta = obtenerDiasRestantes(strtotime('next year', strtotime('April 1')));

    // Verificar si el cumpleaños cae en fin de semana
    $diaCumpleanos = date('l', $fechaHoraCumpleanos);
    $esFinDeSemana = ($diaCumpleanos == 'Saturday' || $diaCumpleanos == 'Sunday') ? 'sí' : 'no';

    // Formatear la fecha del cumpleaños
    $fechaCumpleanosFormateada = date('l, j F Y', $fechaHoraCumpleanos);

    // Construir el mensaje
    $mensaje = "Bienvenido $nombre, estás en $estacion. ";
    $mensaje .= "Quedan $diasHastaNavidad días para las vacaciones de Navidad y $diasHastaSemanaSanta días horas para vacaciones de Semana Santa del próximo año. ";
    $mensaje .= "Tu cumpleaños $esFinDeSemana cae en el día $fechaCumpleanosFormateada.";

    return $mensaje;
}

function obtenerEstacion($fecha)
{
    $mes = date('n', $fecha);

    switch ($mes) {
        case 12:
        case 1:
        case 2:
            return 'invierno';
        case 3:
        case 4:
        case 5:
            return 'primavera';
        case 6:
        case 7:
        case 8:
            return 'verano';
        case 9:
        case 10:
        case 11:
            return 'otoño';
        default:
            return 'Error';
    }
}

function obtenerDiasRestantes($fechaDestino)
{
    $fechaActual = time();
    $diferencia = $fechaDestino - $fechaActual;
    $diasRestantes = ceil($diferencia / (60 * 60 * 24));

    return $diasRestantes;
}
?>