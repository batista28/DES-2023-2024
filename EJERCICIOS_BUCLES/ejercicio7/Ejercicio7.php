<?php
/*lo primero que haremos es obtener los datos de formulario y ponerlo en su variable respectivamente */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];

    // Aqui crearemos la variable mensaje con la función personalizada de obtenermensajeCumpleaño
    $mensaje = obtenerMensajeCumpleanos($nombre, $fecha, $hora);

    // aqui imprimiremos la variable mensaje
    echo $mensaje;
}
//aqui crearemos la primera funcion pedida,la de obtener mensja de cumpleaño
function obtenerMensajeCumpleanos($nombre, $fecha, $hora)
{
    /* Convertirmos la feca y hora a un formato manejable con la funcion strtotime y
    en la siguiente linea craremos la variable con la estacion actual con 
    la funcion que crearemos luego con ls funcion time*/ 
    $fechaHoraCumpleanos = strtotime($fecha . ' ' . $hora);

    $estacionActual = obtenerEstacion(time());

    /* Obtenermos los días y horas restantes para las vacaciones de Navidad y Semana Santa del próximo año
esto lo  haremos con  strtotime,para el caso de navida ponemos el 25 de diciembre 
y para semana santa las siguentes ,la de 2024 empieza el 24 de marzo*/
    $diasHastaNavidad = obtenerDiasRestantes(strtotime('25 December'));
    $diasHastaSemanaSanta = obtenerDiasRestantes(strtotime('next year', strtotime('March 24')));

    // Calcularemos la fecha del próximo cumpleaños en el año actual con las  funciones strtotime y date 
    $proximoCumpleanos = strtotime(date('Y') . '-' . date('m-d', $fechaHoraCumpleanos));

    // Obtener el día de la semana del próximo cumpleaños
    $diaProximoCumpleanos = date('l', $proximoCumpleanos);

    // Verificarmos si el próximo cumpleañs cae en fin de semana
    $esFinDeSemana = ($diaProximoCumpleanos == 'Saturday' || $diaProximoCumpleanos == 'Sunday') ? 'sí' : 'no';

    // Formatear la fecha del próximo cumpleaños
    $fechaProximoCumpleanosFormateada = date('l, j F Y', $proximoCumpleanos);


    $mensaje = "Bienvenido $nombre, estás en $estacionActual. ";
    $mensaje .= "Quedan $diasHastaNavidad días para las vacaciones de Navidad y $diasHastaSemanaSanta días horas para vacaciones de Semana Santa del próximo año. ";
    $mensaje .= "Tu cumpleaños $esFinDeSemana cae en fin de semana, el día que cae es $fechaProximoCumpleanosFormateada.";

    return $mensaje;
}

/*vale aqui en esta funcion con la variable fecha como parametro
con la variable mes, y crearemos un switch con la variable mes y pondremos los distinto case ,
en estecaso por ejemplo si es el mes 12,1 o 2
se hara un return diciendo que es invierno,y asi con las demas estaciones,
y si metemos por ejemplo el numero 13 saldra como error
*/ 
function obtenerEstacion($fecha)
{
    $mes = date('n', $fecha);

    switch ($mes) {
        case 12:
        case 1:
        case 2:
            return 'invierno';
        case 3:
        case 4:
        case 5:
            return 'primavera';
        case 6:
        case 7:
        case 8:
            return 'verano';
        case 9:
        case 10:
        case 11:
            return 'otoño';
        default:
            return 'Error';
    }
}
/*en esta funcion  lo que haremos es saca los dias restantes y lo haremo con la 
variable fechaDestino como parametro,ya dentro de la funcion haremos que la variable
fechaActual sea igual a la funcion time,luego haremos la variable diferencia
que es igual a fechaDestino restandole la fechaActual,Y por ultimo la variable diasRestantes que
sera igual a la funcion ceil que es la que redondea a el suiguiente valor mayor entero y dividiremos
la variable diferencia  con la siguiente formula 60*60*24 es decir 80 segundos por 60 minutos y por 24 horas */ 
function obtenerDiasRestantes($fechaDestino)
{
    $fechaActual = time();
    $diferencia = $fechaDestino - $fechaActual
    $diasRestantes = ceil($diferencia / (60 * 60 * 24));

    return $diasRestantes;
}
?>
