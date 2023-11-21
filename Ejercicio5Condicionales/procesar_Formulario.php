<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $clase = isset($_POST["clase"]) ? implode(", ", $_POST["clase"]) : "";
    $raza = $_POST["raza"];
    $trasfondo=$_POST["trasfondo"];
    
   
    $fuerza = $_POST["fuerza"];
    $destreza=$_POST["destreza"];
    $carisma=$_POST["carisma"];
    
    $caracteristicas = [$fuerza ];
    
    if (array_sum($caracteristicas) / count($caracteristicas) > 15 || max($caracteristicas) > 20) {
 
        header("Location: index.html?error=true");
        exit();
    }

   
    $datos_personaje = [
        "Nombre" => $nombre,
        "Clase" => $clase,
        "Raza" => $raza,
        "Fuerza" => $fuerza,
        "Destreza" => $destreza,
        "Carisma" => $carisma,
        "Trasfondo"=>$trasfondo,
    
    ];

    
    echo "<div class='container mt-5'>";
    echo "<table class='table'>";
    foreach ($datos_personaje as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
    echo "<img src='$raza.jpg' alt='Imagen del personaje'>";
    echo "</div>";
} else {
   
    header("Location: index.html");
    exit();
}
?>
