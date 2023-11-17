<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Conversion de numeros a enteros</title>
</head>

<body>
    <h2>conversion de numeros a enteros</h2>
    <form method="post">

        <label for="numero1">Numero 1</label>
        <input type="text" name="numero1">

        <label for="numero2">Numero 2</label>
        <input type="text" name="numero2">
        <input type="submit" value="Convertir">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $primerNumero = intval($_POST["numero1"]);
        $segundoNumero = round($_POST["numero2"]);

        echo "<br> Conversion de primer numero: $primerNumero";
        echo "<br> Conversion de primer numero: $segundoNumero";
    }
    ?>

</body>

</html>

<?php

?>