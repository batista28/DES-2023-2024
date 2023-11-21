<?php
$carta1 = $_POST['carta1'];
$carta2 = $_POST['carta2'];
$carta3 = $_POST['carta3'];
$carta4 = $_POST['carta4'];
$carta5 = $_POST['carta5'];

$mano = array($carta1, $carta2, $carta3, $carta4, $carta5);

foreach ($mano as $carta) {
    // Mostrar la imagen de cada carta
    $urlImagen = "./" .  $carta . ".png";
    echo "<img src='$urlImagen' alt='$carta' style='width: 100px; height: 150px;'> ";
}

echo "<br>";

// Verificar si es un color
$color = true;
$primerPalo = $mano[0][1];
$numCartas = 0;
foreach ($mano as $carta) {
    $numCartas++;
    $ultimaLetra = $carta[1];
    if ($ultimaLetra !== $primerPalo) {
        $color = false;
        break;
    }
}

// Verificar si es un full
$full = false;
$numeros = array();
$num3 = 0;
$num2 = 0;
foreach ($mano as $carta) {
    $numero = $carta[0];
    if (!isset($numeros[$numero])) {
        $numeros[$numero] = 1;
    } else {
        $numeros[$numero]++;
    }
}
foreach ($numeros as $num => $ocurrencias) {
    if ($ocurrencias === 3) {
        $num3++;
    } elseif ($ocurrencias === 2) {
        $num2++;
    }
}
if ($num3 === 1 && $num2 === 1) {
    $full = true;
}

// Verificar si es una escalera de color
$escaleraColor = false;
$esColor = true;
for ($i = 0; $i < $numCartas - 1; $i++) {
    $dif = ord($mano[$i][0]) - ord($mano[$i + 1][0]);
    $esColor = $dif == 1 && $mano[$i][1] === $mano[$i + 1][1];
    if (!$esColor) {
        break;
    }
}
if ($esColor) {
    $escaleraColor = true;
}

// Mostrar resultado
echo "<h2>Resultado:</h2>";
if ($color) {
    echo "<p>Jugada: Color</p>";
} elseif ($full) {
    echo "<p>Jugada: Full</p>";
} elseif ($escaleraColor) {
    echo "<p>Jugada: Escalera de Color</p>";
} else {
    echo "<p>Jugada: Ninguna de las anteriores</p>";
}
?>
