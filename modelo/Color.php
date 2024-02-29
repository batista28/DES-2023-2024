<?php

class Color
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function getColores()
    {
        $query = "SELECT * FROM color";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delColor($id_color)
    {
        $query = "DELETE FROM color WHERE idColor = :id_color";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id_color", $id_color, PDO::PARAM_INT);
        return $stmt->execute() ? 1 : -1;
    }
}
?>