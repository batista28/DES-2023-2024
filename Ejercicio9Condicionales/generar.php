<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio  web generado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
$encabezado = $_POST["encabezado"];
$cuerpo = $_POST["cuerpo"];
$pie = $_POST["pie"];
$estilo = $_POST["estilo"];


require("$encabezado.html");
require("$cuerpo.html");
require("$pie.html");

echo "<link rel='stylesheet' href='$estilo.css'>";
?>



</body>
</html>