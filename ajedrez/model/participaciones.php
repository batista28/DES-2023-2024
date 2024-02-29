<?php
namespace ajedrez\model;

use PDOException;

class participaciones
{
    public static function get_participaciones($pdo)
    {
        try {
            $query = "SELECT * FROM participaciones";

            $resultado = $pdo->query($query);

            $result_set = $resultado->fetchAll();
        } catch (PDOException $e) {
            print "<p>ERROR: " . $e->getMessage() . ".</p></br>";
            die();
        }

        return $result_set;
    }

    public static function get_participaciones_jugador($pdo, $id_jugador)
    {
        try {
            $query = "SELECT * FROM participaciones WHERE  id_jugador=$id_jugador";

            $resultado = $pdo->query($query);

            $result_set = $resultado->fetchAll();
        } catch (PDOException $e) {
            print "<p>ERROR: " . $e->getMessage() . ".</p></br>";
            die();
        }

        return $result_set;
    }

    public static function get_participaciones_torneos($pdo, $id_torneo)
    {
        try {
            $query = "SELECT participaciones.*, jugador.nombre AS nombreJug, jugador.apellido AS apellidoJug FROM participaciones INNER JOIN jugador ON participaciones.id_jugador = jugador.id_jugador WHERE participaciones.id_torneo = $id_torneo";

            $resultado = $pdo->query($query);

            $result_set = $resultado->fetchAll();
        } catch (PDOException $e) {
            print "<p>ERROR: " . $e->getMessage() . ".</p></br>";
            die();
        }

        return $result_set;
    }
}