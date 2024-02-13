<?php

namespace Proyecto_Examen\model;

use PDOException;

class Provincia
{

    /*
    Funcion para obtener todas las Provincia
    */

    public static function getProvincias($conexion)
    {

        //Hacemos un try-catch para manejar posibles fallos
        try {
            //Realizamos una quiery de todos los datos de la Provincia
            $query = "SELECT * FROM provincia";

            //Ejecutamos la query y guardamos el puntero en $resultado
            $resultado = $conexion->query($query);

            //Guardamos los datos de todos los punteros
            $resultado = $resultado->fetchAll();
        } catch (PDOException $e) {
            //Si da un error, mostrara el error
            print '¡Error!: ' . $e->getMessage() . '<br/>';

            //Terminamos el script
            die();
        }
        //Devolvemos los datos
        return $resultado;
    }
}
