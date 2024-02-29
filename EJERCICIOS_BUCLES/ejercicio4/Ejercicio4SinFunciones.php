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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $entrada = $_POST["nombre"];
        
       
        $palabraActual = "";
        $contadorDePalabras = 0;
        $palabras = [];

        $length = strlen($entrada);

        
        for ($i = 0; $i <= $length; $i++) {
            // Obtener el carácter actual
            $caracter = ($i < $length) ? $entrada[$i] : ' ';

            // Verificaremos si el carácter no es un espacio
            if ($caracter != " ") {
                // Construiremos la palabra actual
                $palabraActual .= $caracter;
            } else {
                // Agregaremos la palabra actual al array de palabras
                $palabras[] = $palabraActual;

                // Reiniciamos la palabra actual
                $palabraActual = "";

                // Incrementamos el contador de palabras
                $contadorDePalabras++;
            }
        }

        // Iterarmos a través de las palabras
        for ($i = 0; $i < $contadorDePalabras; $i++) {
            // Obtenemos la palabra actual
            $palabra = $palabras[$i];

            // Inicializamos contadores de contar letra y otra de consonantes
            $contadorDeConsonantes = 0;
            $contadorDeLetras = 0;

            // creamos un array de vocales
            $vocales = ['a', 'e', 'i', 'o', 'u'];

            // ersta seria la variable de la Longitud de la palabra
            $palabraLength = strlen($palabra);

            // Iterar a través de los caracteres de la palabra
            for ($j = 0; $j < $palabraLength; $j++) {
                // Obtener el carácter actual
                $caracter = $palabra[$j];

                // Verificar si el carácter es una letra,tanto en mayuscula ,como en minusculas ,y con diferentes tildes
                if (
                    ($caracter >= 'a' && $caracter <= 'z') ||
                    ($caracter >= 'A' && $caracter <= 'Z') ||
                    ($caracter == 'à' || $caracter == 'á' || $caracter == 'â' || $caracter == 'ã' || $caracter == 'ä' ||
                        $caracter == 'è' || $caracter == 'é' || $caracter == 'ê' || $caracter == 'ë' ||
                        $caracter == 'ì' || $caracter == 'í' || $caracter == 'î' || $caracter == 'ï' ||
                        $caracter == 'ò' || $caracter == 'ó' || $caracter == 'ô' || $caracter == 'õ' || $caracter == 'ö' ||
                        $caracter == 'ù' || $caracter == 'ú' || $caracter == 'û' || $caracter == 'ü')
                ) {
                    // Incrementar el contador de letras
                    $contadorDeLetras++;

                    // Verificar si el carácter no es una vocal
                    $esVocal = false;

                    foreach ($vocales as $vocal) {
                        if ($caracter == $vocal) {
                            $esVocal = true;
                            break;
                        }
                    }

                    if (!$esVocal) {
                        // Incrementamos  el contador de consonantes
                        $contadorDeConsonantes++;
                    }
                }
            }

            // Mostraremos los  resultados por 0pantalla
            echo "Palabra" . ($i + 1) . ": $contadorDeConsonantes Consonantes, $contadorDeLetras letras<br>";
        }
    }
    ?>
</body>

</html>
