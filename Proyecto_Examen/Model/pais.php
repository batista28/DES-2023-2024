<?php

namespace Proyecto_Examen\model;

use PDOException;

class pais
{

    /*
    Funcion para obtener todas las pais
    */

    public static function getPaises($conexion)
    {

        //Hacemos un try-catch para manejar posibles fallos
        try {
            //Realizamos una quiery de todos los datos de la pais
            $query = "SELECT * FROM pais";

            //Ejecutamos la query y guardamos el puntero en $resultado
            //query ejecuta antes de la variable
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
