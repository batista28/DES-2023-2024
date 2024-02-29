<?php
/*Nombre texto
Física(checkbox si/no)
dirección texto
provincia (desplegable, todas las provincias andaluzas)
Presupuesto range con steps de 1 unidad 15-150
fecha apertura tienda (date)
Tomos Manga Área de Texto
Botón Solicitud

Los tomos se introducirán en un área de texto, en cada línea (Recordar que \n es separador de línea) 
se introduce una fase en el siguiente formato:

one piece,tomo 23,324,5,shonen,S,Málaga 

Siendo los datos, nombre, detalle,paginas, unidades en stock, categoria (shonen, shojo, kodomo)  ,
Edición coleccionista (S/N) y almacén (Provincias Andaluzas) separados por ‘,’

Cuando se pulse el botón, se enviará a otra página php que realizara lo siguiente:

Mostrará una estadística de los datos del videojuego, de la siguiente manera:

Número de Volumenes Totales (suma de stocks): X

Cantidad de Unidades XLS Disponibles(Más de 300pag y ed colecionista):X  

Hay Stock Colecionista: La función recibirá los almacenes, devolverá true si hay mas de 10 tomos coleccionista
en cada provincia y es tienda física.

Stock por Provincia: (calculará la suma de los stock de los tomos de cada provincia,
 se calculará 
utilizando una función que reciba los datos de los tomos y devuelva un array 
asociativo del tipo
 [“jaen” =>230,”sevilla”=>400,”almeria”=>320]. No tienen porque estar todas las
  provincias)

Cumple Cercanía :Utilizar una función que recibe los datos de los tomos y la provincia de la 
tienda y devuelva true si sólo hay tomos en provincias colindantes con la tienda

Stock Tomo: La función recibe los datos de los tomos ,la provincia y el nombre de
 un tomo y 
comprueba si en los almacenes de las provincias colindantes a la tienda hay stock 
de dicho manga,
 para saber si es el manga, tiene que buscar el nombre del manga y estar presente 
 en el 
 nombre o en la descripción. Devuelve el número de stock disponible.

 */
//primero obteneremos los datos de formulario
$nombre = $_POST["nombre"];
$fisica = $_POST["fisica"];
$direccion = $_POST["direccion"];
$presupuesto = $_POST["presupuesto"];
$provincia = $_POST["provincia"];
$datosTxtTomos = ($_POST["txtTomos"]);
//({}[]

function sumaStock($datosTxtTomos)
{
    $totalStock = 0;
    $datosTomos = explode("\n", trim($datosTxtTomos));
    foreach ($datosTomos as $manga) {
        $tomos = explode(",", $manga);
        $totalStock += $tomos[3];
        print_r($tomos);
        for ($i = 0; $i < count($tomos); $i++) {

        }
    }

    return $totalStock;

}

function sumaStockXLS($datosTxtTomos)
{

    $unidadesXLS = 0;
    $datosTomos = explode("\n", $datosTxtTomos);
    foreach ($datosTomos as $manga) {
        $tomos = explode(",", $manga);

        if (intval($tomos[2]) > 300 && $tomos[5] == "S") {
            $unidadesXLS += $tomos[3];
        }



    }

    return $unidadesXLS;

}

function HayStocksColeccionista($datosTxtTomos, $fisica)
{
    $stockColeccionista = true;
    $datosTomos = explode("\n", $datosTxtTomos);
    foreach ($datosTomos as $manga) {
        $tomos = explode(",", $manga);

        if ($tomos[5] == "N" || $fisica == "no") {
            $stockColeccionista = false;
        }


    }

    return $stockColeccionista;

}

function cumpleCercanias($datosTxtTomos, $provincia)
{
    $provinciaColidente = array("malaga", "jaen", "huelva", "cadiz", "granada",
        "sevilla", "cordoba", "almeria");
    $datosTomos = explode("\n", $datosTxtTomos);
    foreach ($datosTomos as $manga) {
        $tomos = explode(",", $manga);




    }

}
echo "Este es el stock total: " . sumaStock($datosTxtTomos . "\n");
echo "Este es el stock total de unidades XLS: " . sumaStockXLS($datosTxtTomos);
if (HayStocksColeccionista($datosTxtTomos, $fisica)) {
    echo "si hay stock";
} else {
    echo "no hay stock coleccionista";

}







