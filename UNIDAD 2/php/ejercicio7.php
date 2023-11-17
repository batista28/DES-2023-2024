<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Formulario</title>
    <style>
        .esDestacado{
            background-color: yellow;
        }
        table{
            border-collapse: collapse;
            width: auto;
            text-align: center  ;
        }
        table,td,tr{
            border:  1px solid black;
        }
        td,th{
            text-align: center;
            padding: 10px;
        }
    
        </Style>
</head>
<body>
<?php 
$nombre=($_POST["name"]);
$edad=($_POST["edad"]);
$sexo=($_POST["sexo"]);
$sueldo=($_POST["sueldo"]);

$rangoSueldo=-1;
$rangoSexo=-1;

if ($sueldo >=0 && $sueldo<=  1200) {
    $rangoSueldo=0;
}elseif ($sueldo >=1200 && $sueldo <= 20000) {
    $rangoSueldo=1;
}elseif ($sueldo >=21000 && $sueldo <= 35000) {
    $rangoSueldo=2;
}else{
    $rangoSueldo=3;
}


if ($sexo ==="HOMBRE") {
    $rangoSexo=0;
}elseif ($sexo === "MUJER") {
   $rangosexo=1;
}
   
$esDestacado=$rangoSueldo !==-1 && $rangoSexo !==-1 && $edad==="JUBILADO";

echo "<table>";
echo "<tr>";
echo "<th colspan='2'>NOMBRE</th>";
echo "<td colspan='2'class=" . ($esDestacado ? "class=destacado": " ") . ">$nombre</td>";
echo "</tr>";
echo "<th colspan='2'>HOMBRE</th>";
echo "<th  colspan='2'>MUJER</th>";
echo "</tr>";
echo "<td>0-25";
echo "<td>25-45";
echo "<td>45-65";
echo "<td>JUBILADO";
echo "</tr>";
echo "<td>0-1200";
echo "<td>12000-20000";
echo "<td>21000-35000";
echo "<td>+35000";
echo "<td class=" . ($esDestacado ? "destacado": " ") . ">$sexo</td>";
echo "<td class=" . ($esDestacado ? "destacado": " ") . ">$edad</td>";
echo "</tr>";
echo "</td>";
echo "<table>";

?> 
</body>
</html>