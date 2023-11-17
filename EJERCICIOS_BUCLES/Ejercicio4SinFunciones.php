<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Consonantes y Letras</title>
</head>

<body>
    <form method="post">
        <label for="nombre">Nombre Completo:</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreCompleto = $_POST["nombre"];
        $palabras = explode(" ", trim($nombreCompleto));

        foreach ($palabras as $index => $palabra) {
            $numConsonantes = contarConsonantesSinFunciones($palabra);
            $numLetras = contarLetrasSinFunciones($palabra);

            echo "Palabra" . ($index + 1) . ": $numConsonantes Consonantes $numLetras letras<br>";
        }
    }

    function contarConsonantesSinFunciones($palabra)
    {
        $consonantes = "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
        $numConsonantes = 0;

        for ($i = 0; $i < strlen($palabra); $i++) {
            $letra = $palabra[$i];

            if (($letra >= 'a' && $letra <= 'z') || ($letra >= 'A' && $letra <= 'Z')) {
                if (strpos($consonantes, $letra) !== false) {
                    $numConsonantes++;
                }
            }
        }

        return $numConsonantes;
    }

    function contarLetrasSinFunciones($palabra)
    {
        $numLetras = 0;

        for ($i = 0; $i < strlen($palabra); $i++) {
            $letra = $palabra[$i];

            if (($letra >= 'a' && $letra <= 'z') || ($letra >= 'A' && $letra <= 'Z')) {
                $numLetras++;
            }
        }

        return $numLetras;
    }
    ?>
</body>

</html>