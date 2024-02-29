<!DOCTYPE html>
<html>

<head>
    <title>Estadísticas de Números</title>
</head>

<body>
    <h1>Estadísticas de Números</h1>
    <form method="post">
        Números: <input type="text" name="numeros" required>
        <br>
        Ordenar por números primos:
        <input type="checkbox" name="orden" value="true">
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verifica si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene los números del formulario
        $numerosTexto = $_POST["numeros"];
        $length = strlen($numerosTexto);
        $numeros = [];

        // Obtiene el valor de $orden si está presente, de lo contrario, establece el valor predeterminado en false
        $orden = isset($_POST["orden"]);

        // Convierte el texto de números en un array de números enteros
        $numeroActual = '';
        $contador = 0;
        for ($i = 0; $i <= $length; $i++) {
            $caracter = ($i < $length) ? $numerosTexto[$i] : ' ';
            if ($caracter == ' ') {
                // Si se encuentra un espacio, agrega el número actual al array de números
                if ($length > 0) {
                    $numeros[] = (int)$numeroActual;
                    $numeroActual = '';
                    $contador++;
                }
            } else {
                // Construye el número actual caracter por caracter
                $numeroActual .= $caracter;
            }
        }

        // Calcula números primos
        $numerosPrimos = [];
        foreach ($numeros as $numero) {
            if ($numero < 2) {
                continue;
            }
            $esPrimo = true;
            for ($i = 2; $i * $i <= $numero; $i++) {
                // Verifica si el número es divisible por algún número hasta su raíz cuadrada
                if ($numero % $i === 0) {
                    $esPrimo = false;
                    break;
                }
            }
            // Si no es divisible por ningún número, es primo
            if ($esPrimo) {
                $numerosPrimos[] = $numero;
            }
        }

        // Calcula la media y el mínimo
        $suma = 0;
        $minimo = $numeros[0];
        foreach ($numeros as $numero) {
            // Suma los números y encuentra el mínimo
            $suma += $numero;
            if ($numero < $minimo) {
                $minimo = $numero;
            }
        }
        // Calcularemos  la media dividiendo la suma por el contador
        $media = $contador > 0 ? $suma / $contador : 0;

        // Ordenaremos según el parámetro opcional
        if ($orden) {
            // Ordenamos los numeros primos de menor a mayor manualmente
            $numPrimosCount = $contador; // Utiliza el contador manual
            for ($i = 0; $i < $numPrimosCount - 1; $i++) {
                for ($j = $i + 1; $j < $numPrimosCount; $j++) {
                    if ($numerosPrimos[$i] > $numerosPrimos[$j]) {
                        // Intercambiamos elementos si estan en el orden incorrecto
                        $temp = $numerosPrimos[$i];
                        $numerosPrimos[$i] = $numerosPrimos[$j];
                        $numerosPrimos[$j] = $temp;
                    }
                }
            }
            //este es el  Resultado con números primos ordenados, media y mínimo
            $resultado = ['nprimos' => $numerosPrimos, 'media' => $media, 'minimo' => $minimo];
        } else {
            // y esste es el Resultado con mínimo, media y números primos sin ordenar
            $resultado = ['minimo' => $minimo, 'media' => $media, 'nprimos' => $numerosPrimos];
        }

        // Mostramos los resultados en una tabla HTML
        echo "<h2>Resultados</h2>";
        echo "<table border='1'>";
        foreach ($resultado as $clave => $valor) {
            echo "<tr><td>$clave</td><td>";
            if ($clave === 'nprimos') {
                $resultadosTexto = '';
                foreach ($valor as $numeroPrimo) {
                    // Convertimos los numeros primos a texto
                    $resultadosTexto .= "$numeroPrimo, ";
                }
                echo rtrim($resultadosTexto, ', ');
            } else {
                // Mostramos directamente la media y el mínimo
                echo $valor;
            }
            echo "</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>
