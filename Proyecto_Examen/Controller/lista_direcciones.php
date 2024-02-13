<?php
namespace controller;

use Proyecto_Examen\model\Direccion;

error_reporting(E_ERROR | E_PARSE);

use Proyecto_Examen\Model\Pais as ModelPais;
use Proyecto_Examen\Model\Provincia as ModelProvincia;
use Proyecto_Examen\Model\Utils as ModelUtils;
use Proyecto_Examen\Model\Direccion as ModelDireccion;

include('../Model/pais.php');
include('../Model/Utils.php');
include('../Model/provincia.php');
include('../Model/direccion.php');

$conexion = ModelUtils::conectar();

$paises = ModelPais::getPaises($conexion);
$provincias = ModelProvincia::getProvincias($conexion);
$direcciones = [];

// Verificar si se ha seleccionado un país o una provincia
var_dump($_POST);
if (isset($_POST['pais'])) {
    $pais = $_POST['pais'];
    // Obtener las direcciones del país seleccionado
    $direcciones = ModelDireccion::getDireccionesPais($conexion, $pais);
} elseif (isset($_POST['provincia'])) {
    $provincia = $_POST['provincia'];
    // Obtener las direcciones de la provincia seleccionada
    $direcciones = ModelDireccion::getDireccionesProv($conexion, $provincia);
}
//:: es para llamar a funciones estaticas

$direccionesPais = ModelDireccion::getDireccionesPais($conexion, $pais);
$direccionesProv = ModelDireccion::getDireccionesProv($conexion, $provincia);

include('..\view\mostrar_direcciones.php');




