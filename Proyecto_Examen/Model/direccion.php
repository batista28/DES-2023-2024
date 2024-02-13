<?php

namespace Proyecto_Examen\model;

use PDOException;

class Direccion
{



    public static function getDirecciones($conexion)
    {

        //Hacemos un try-catch para manejar posibles fallos
        try {
            //Realizamos una quiery de todos los datos de la pais
            $query = "SELECT Direccion.* , provincia.nombre as nombreProv, pais.nombre as nombrePais FROM Direccion inner join pais on pais.id =direccion.idPais inner join provincia ON provincia.codProv = direccion.codProv;";

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
    /*
    getDireccionesProv(conexion, codProv) recibe el código de la provincia y devuelve
los datos de todas las direcciones de dicha provincia. Dentro de la clase direccion
    */

    public static function getDireccionesProv($conexion, $codProv)
    {

        //Hacemos un try-catch para manejar posibles fallos
        try {
            //Realizamos una query de todos los datos de la direcciones
            $query = "SELECT direccion.*,pais.nombre as nombrePais,Provincia.nombre as nombreProv FROM direccion INNER JOIN provincia ON Provincia.codProv=direccion.codProv INNER JOIN pais on pais.id = direccion.idPais WHERE Provincia.codProv = :codProv";
            print $codProv;
            //Ejecutamos la query y guardamos el puntero en $stmt
            $stmt = $conexion->prepare($query);

            //asignamos el valor del parametro
            $stmt->bindValue(':codProv', $codProv, );

            //ejecutamos la funcion
            $stmt->execute();

            //Guardamos los datos de todos los punteros
            $stmt = $stmt->fetchAll();
        } catch (PDOException $e) {
            //Si da un error, mostrara el error
            print '¡Error!: ' . $e->getMessage() . '<br/>';

            //Terminamos el script
            die();
        }
        //Devolvemos los datos
        return $stmt;
    }

    public static function getDireccionesPais($conexion, $idPais)
    {

        //Hacemos un try-catch para manejar posibles fallos
        try {
            //Realizamos una quiery de todos los datos de la Direcciones
            $query = "SELECT direccion.* ,provincia.nombre as nombreProv ,Pais.nombre as nombrePais FROM direccion INNER JOIN pais on pais.id=direccion.idPais INNER JOIN provincia ON direccion.codProv= provincia.codProv WHERE Pais.id = :idPais";


            //Ejecutamos la query y guardamos el puntero en $stmt
            $stmt = $conexion->prepare($query);

            //asignamos el valor del parametro
            $stmt->bindValue(':idPais', $idPais);

            //ejecutamos la funcion
            $stmt->execute();

            //Guardamos los datos de todos los punteros
            $stmt = $stmt->fetchAll();
        } catch (PDOException $e) {
            //Si da un error, mostrara el error
            print '¡Error!: ' . $e->getMessage() . '<br/>';

            //Terminamos el script
            die();
        }
        //Devolvemos los datos
        return $stmt;
    }
}
