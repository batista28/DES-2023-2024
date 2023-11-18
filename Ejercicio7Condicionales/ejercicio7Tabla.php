<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Formulario</title>
    <style>
        .destacado {
            background-color: yellow;
        }
        table {
            margin: auto; /* Centro la tabla en la página */
            border-collapse: collapse;
            width: 50%; /* Ajusta el ancho de la tabla según sea necesario */
            text-align: center;
        }
        table, td, th {
            border:  1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php 
$nombre = $_POST["name"];
$edad = $_POST["edad"];
$sexo = ($_POST["sexo"]) ;
$sueldo = $_POST["sueldo"];

$genero="";
$rangoEdad = "";
$rangoSueldo = "";

if ($sexo=="HOMBRE") {
    $genero="HOMBRE";
}
else {
    $genero="MUJER";
}


if ($edad <= 25) {
    $rangoEdad = "0-25";
} elseif ($edad <= 45) {
    $rangoEdad = "25-45";
} elseif ($edad <= 65) {
    $rangoEdad = "45-65";
} else {
    $rangoEdad = "jubilado"; // Cambié "JUBILADO" a "jubilado"
}

// Definir rangos de sueldo
if ($sueldo <= 1200) {
    $rangoSueldo = "0-12000";
} elseif ($sueldo <= 20000) {
    $rangoSueldo = "12000-20000";
} elseif ($sueldo <= 35000) {
    $rangoSueldo = "21000-35000";
} else {
    $rangoSueldo = "+35000";
}

echo "<table>";
echo "<tr><th colspan='2'>NOMBRE</th><td colspan='3' class='" . ($rangoEdad === "jubilado" ? "destacado" : "") . "'>$nombre</td></tr>";
echo "<tD colspan='2' class='" . ($genero === "HOMBRE" ? "destacado" : "") . "'>HOMBRE</td>";
echo "<tD colspan='2' class='" . ($genero === "MUJER" ? "destacado" : "") . "'>MUJER</td>";
echo "<tr><td class='" . ($rangoEdad === "0-25" ? "destacado" : "") . "'>0-25</td>";
echo "<td class='" . ($rangoEdad === "25-45" ? "destacado" : "") . "'>25-45</td>";
echo "<td class='" . ($rangoEdad === "45-65" ? "destacado" : "") . "'>45-65</td>";
echo "<td class='" . ($rangoEdad === "jubilado" ? "destacado" : "") . "'>jubilado</td></tr>";
echo "<tr><td class='" . ($rangoSueldo === "0-1200" ? "destacado" : "") . "'>0-1200</td>";
echo "<td class='" . ($rangoSueldo === "12000-20000" ? "destacado" : "") . "'>12000-20000</td>";
echo "<td class='" . ($rangoSueldo === "21000-35000" ? "destacado" : "") . "'>21000-35000</td>";
echo "<td class='" . ($rangoSueldo === "+35000" ? "destacado" : "") . "'>+35000</td>";
echo "</table>";
?>
</body>
</html>
