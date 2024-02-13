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


//Select con dos valores seleccionados.

if ($_POST["provincia"] != -1 && $_POST["pais"] != -1) {
    include('..\view\mostrar_direcciones.php');
    echo 'Solo selecciona 1 por favor';
    exit(400);
}

if ($_POST["pais"] === $_POST["provincia"]){
    $direcciones = ModelDireccion::getDirecciones($conexion);
    include('..\view\mostrar_direcciones.php');
    exit(200);
}

if($_POST["pais"] != -1){
    $pais = $_POST['pais'];
    // Obtener las direcciones del país seleccionado
    $direcciones = ModelDireccion::getDireccionesPais($conexion, $pais);

}else{

    $provincia = $_POST['provincia'];
    // Obtener las direcciones de la provincia seleccionada
    $direcciones = ModelDireccion::getDireccionesProv($conexion, $provincia);
}
// Verificar si se ha seleccionado un país o una provincia
//:: es para llamar a funciones estaticas
include('..\view\mostrar_direcciones.php');
exit(200);





