<?php
namespace ajedrez\model;

use PDOException;

class jugadores
{
    public static function get_jugadores($pdo)
    {
        try {
            $query = "SELECT * FROM jugador";

            $resultado = $pdo->query($query);

            $result_set = $resultado->fetchAll();
        } catch (PDOException $e) { // Manejo posibles excepciones de PDO
            print "<p>ERROR: " . $e->getMessage() . ".</p></br>";
            die();
        }
        // Devuelvo el resultado
        return $result_set;
    }
}