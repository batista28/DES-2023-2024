<?php

namespace Proyecto_Examen\Model;

use PDO;
use PDOException;

class Utils
{
    /**
     * Funcion para conectarnos a la base de datos.
     */
    public static function conectar()
    {
        //Incluimos el archivo de configuracion.
        include("../settings.inc");

        //Usamos un try-catch para evitar errores
        try {
            //Utilizamos los datos de "settings.inc" para conectarnos a la base de datos
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $password);
        } catch (PDOException $e) {
            //Si da un error, mostrara el error.
            print "¡Error!: " . $e->getMessage() . "<br/>";

            //Terminamos el script
            die();
        }

        //Devolvemos la conexion a la base de datos
        return $pdo;
    }

    public static function validarDatos($cadena)
    {
        $data = trim($cadena);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}
