<!DOCTYPE html>
<html>

<head>
    <title>Contador de Consonantes y Letras</title>
</head>

<body>
    <h1>Contador de Consonantes y Letras</h1>
    <form method="post">
        Nombre completo: <input type="text" name="nombre" required>
        <input type="submit" value="Contar">
    </form>
    <?php
    $palabras = ($_POST["nombre"]);
    $palabras = strtolower($palabras);
    $contarPalabra = strlen($palabras);
    $contadorDeConsonantes = 0;
    $contadorDePalabras = 1;

    for ($i = 0; $i < $contarPalabra; $i++) {
        $vocales = ['a', 'e', 'i', 'o', 'u'];
        if ($palabras[$i] != " " && !in_array($palabras[$i], $vocales)) {
            $contadorDeConsonantes++;
        }
        if ($palabras[$i] == " ") {
            $contadorDePalabras++;

        }
    }

    echo " las consonantes son : $contadorDeConsonantes <br>";
    echo " las  palabras $palabras son : $contadorDePalabras";
    ?>