<!DOCTYPE html>
<html>

<head>
    <title>Tabla Generada</title>
</head>

<body>
    <h2>Tabla Generada</h2>

    <?php
    // Utilizamos el  iclude para que se incluya el archivo con las funciones necesarias
    include "Ejercicio6Funciones.php";

    // Obtenemos los valores de las variables del formulario
    $columnas = $_POST["columnas"];
    $filas = $_POST["filas"];
    $color = $_POST["color"];

    /* Llamamos a la funcion para crear la tabla con los 
    parámetros dados y Verificamos si se selecciono la opcion
     de edad y llama a la funcion correspondiente*/
    crearTabla($color, $columnas, $filas);

    
    if (isset($_POST["edad"])) {
        crearEdad();
    }

    // Verificamos si se selecciono la opción de sexo y llama a la función correspondiente
    if (isset($_POST["sexo"])) {
        crearSexo();
    }

    // Verificamos si se ingresaron observaciones y llama a la funcion correspondiente
    if (isset($_POST["observaciones"])) {
        // Obtenemos los valores opcionales de ancho y filas para las observaciones
        $ancho = isset($_POST["ancho_obs"]) ? $_POST["ancho_obs"] : 10;
        
        $filas_obs = isset($_POST["filas_obs"]) ? $_POST["filas_obs"] : 10;
        // Llamamos a la funcion para crear el área de observaciones con los parametros dados
        crearObservaciones($ancho, $filas_obs);
    }
    ?>
</body>

</html>
