<?php
namespace ajedrez\controller;

use ajedrez\model\Utils as Utils;
use ajedrez\model\jugadores as jugadores;
use ajedrez\model\participaciones as participaciones;
use ajedrez\model\torneo as torneos;

require_once '../model/jugadores.php';
require_once '../model/torneos.php';
require_once '../model/participaciones.php';
require_once '../model/Utils.php';

$pdo = Utils::conectar();
$jugadores = jugadores::get_jugadores($pdo);
$torneos = torneos::get_torneos($pdo);

$participaciones = $_POST['participaciones'];
$participaciones_jugador = [];
$participaciones_torneo = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_jugador = $_POST['jugador'];
    $id_torneo = $_POST['torneo'];

    $participaciones_jugador = participaciones::get_participaciones_jugador($pdo, $id_jugador);
    $participaciones_torneo = participaciones::get_participaciones_torneos($pdo, $id_torneo);
}

require '../view/mostrar_participaciones.php';
?>