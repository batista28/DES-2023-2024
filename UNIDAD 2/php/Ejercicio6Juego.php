<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="ejercicio6Juego.css" />
</head>
<body>
    <?php 
$nombreJ1=($_POST["nombreJ1"]);
$nombreJ2=($_POST["nombreJ2"]);
$cantidad_victorias=($_POST["cantidad"]);

$rondas_ganadasJ1=0;
$rondas_ganadasJ2=0;


while ($rondas_ganadasJ1 < $cantidad_victorias && $rondas_ganadasJ2 < $cantidad_victorias) {
    $jugadaJ1 = rand(0, 2);
    $jugadaJ2 = rand(0, 2);

    $jugadas = ['Piedra', 'Papel', 'Tijera'];

    echo "<h2>$nombreJ1 vs $nombreJ2</h2>";
    echo "<h3>$nombreJ1:<br> <img src='$jugadas[$jugadaJ1].jpeg' alt='$jugadas[$jugadaJ1]' </h3>";
    echo "<h3>$nombreJ2:<br> <img src='$jugadas[$jugadaJ2].jpeg' alt='$jugadas[$jugadaJ2]' </h3>";

    if ($jugadaJ1 == $jugadaJ2) {
        echo "<H1>¡Empate!</H1>";
    } elseif (($jugadaJ1 == 0 && $jugadaJ2 == 2) ||
              ($jugadaJ1 == 1 && $jugadaJ2 == 0) ||
              ($jugadaJ1 == 2 && $jugadaJ2 == 1)) {
        echo "<p>$nombreJ1 GANA ESTA RONDA</p>";
        $rondas_ganadasJ1++;
    } else {
        echo "<p>$nombreJ2 GANA ESTA RONDA</p>";
        $rondas_ganadasJ2++;
    }

    echo "<p>Puntuación:</p>";
    echo "<p>$nombreJ1: $rondas_ganadasJ1</p>";
    echo "<p>$nombreJ2: $rondas_ganadasJ2</p>";
    echo "<hr>";
}

echo "<h1>¡Juego terminado!</h1>";

if ($rondas_ganadasJ1 > $rondas_ganadasJ2) {
    echo "<h2>$nombreJ1 gana el juego</h2>";
} else {
    echo "<h2>$nombreJ2 gana el juego</h2>";
}
?>


</body>
</html>
?>