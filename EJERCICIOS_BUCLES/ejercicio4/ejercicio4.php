<!DOCTYPE html>
<html>

<head>
    <title>Contador de Consonantes y letras</title>
</head>

<body>
    <h1>Contador de Consonantes y letras</h1>
    <form method="post">
        Nombre completo: <input type="text" name="nombre" required>
        <input type="submit" value="Contar">
    </form>

    <?php
    /*primero  obtenemos la informacion de formulario  y creamos la variable palabras
    y utilizaremos la funcion explode para ello ponemos los delimitadores de un espacio y la 
    variable entrada,ahora crearemos el primer for y que la variable creada i sea meno que el las palabras contada
    por la funcion count en la variable palabras,luego creamo la variable palabra
     que es igual a la funcion strtolower de arrayy palabra de i ,
    para convertir todas las letras en minusculas,creamos la variable 
    contadodeConsonates y le damos un valor de 0,que luego utilizaremos para contar las consonantes
     Calculamos la longitud de numero de caracteres de la palabra actual y la asignamos a la variable de contadorDeLetras*/
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entrada = $_POST["nombre"];
        $palabras= explode(" ", $entrada);

        for ($i = 0; $i < count($palabras); $i++) {
            $palabra = strtolower($palabras[$i]);
            $contadorDeConsonantes = 0;
            $contadorDeLetras = strlen($palabra);
/*y dentro de primer for creamos este segundo for con la variable j y que sea meno de la
variable contadordeletras,para itera en cada caracter de la palabra actual ,
luego  creamos un array llamado vocales y le asignamos las cincos vocales,
ahora creamos una condicion de si el caracter actual no es un espacio o
una de las vocales ,la variable contadordeconsonante se incrementara en 1 */
            for($j = 0; $j < $contadorDeLetras; $j++) {
                $vocales = ['a', 'e', 'i', 'o', 'u'];
                if ($palabra[$j] != " " && !in_array($palabra[$j], $vocales)) {
                    $contadorDeConsonantes++;
                }
            }

            echo "Palabra" . ($i + 1) . ": $contadorDeConsonantes Consonantes, $contadorDeLetras letras<br>";
        }
    }
    ?>
</body>

</html>
