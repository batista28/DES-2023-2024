<!DOCTYPE html>
<html>

<head>
    <title>Estadísticas de Números</title>
</head>

<body>
    <h1>Estadísticas de Números</h1>
    <form method="post">
        Números: <input type="text" name="numeros" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
//aqui obtenemos la informacion de formulario con ua condicion de si el metodoo request sea igual a post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numerosTexto = $_POST["numeros"];
    $orden = isset($_POST["orden"]) ? $_POST["orden"] : true;
    
    function calcularEstadisticas($numerosTexto, $orden = true)
    {
        /*convertiremos el texto de numero en un array de numeros entero utilizando el explode
        para dividir el texto en epacios y con el array_map con la funcion intval en convertir cada fragmento en un numero entero*/
        $numeros = array_map('intval', explode(' ', $numerosTexto));

        /*utilizamos el array_filter para ir obteniendo solo los numeris primos
        del array  */
        $numerosPrimos = array_filter($numeros, function ($numero) {
            if ($numero < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i === 0) {
                    return false;
                }
            }
            return true;
        });

        /*Para calcula la media y mínimo,primero crearemos la variable media
        y seria igual a la suma de array numeros dividiendo por el contador de numeros
        para sacar la media,y paa el minimo utilizaremos la funcion min en el array numeros
        */
        $media = array_sum($numeros) / count($numeros);
        $minimo = min($numeros);

       //aqui construimos un array asociativo llamado resultado dependiendo de la variable
        $resultado = $orden
            ? ['nprimos' => $numerosPrimos, 'media' => $media, 'minimo' => $minimo]
            : ['minimo' => $minimo, 'media' => $media, 'nprimos' => $numerosPrimos];

        return $resultado;
    }


        $estadisticas = calcularEstadisticas($numerosTexto, $orden);
//aqui mostraremos la tabla con los distintos resultados para ello usaremos un foreach
        echo "<h2>Resultados</h2>";
        echo "<table border='1'>";
//Si el valor es un array, imprimimos los elementos separados por comas
        foreach ($estadisticas as $clave => $valor) {
            echo "<tr><td>$clave</td><td>";
            if (is_array($valor)) {
                echo implode(', ', $valor);
            } else {
               echo $valor;
            }
            echo "</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>
