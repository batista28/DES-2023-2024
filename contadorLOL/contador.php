<?php
/*Se pretende hacer y mostrar un contador de las regiones pertinentes:

Demacia, Noxus, Jonia, Shurima, Vacio, Islas de la sombra, Piltover, Aguas estancadas, Ixtal, Freljord, Targon, Bandle, Runaterra

Para esto se utilizara un formulario PHP, el cual solamente tendra un textarea y el boton de enviar, este formulario debe estar estilizado con bootstrap.

El formato que se añadira al text area debe ser el siguiente:
Campeon - Region, Region

Ten en cuenta que pueda haber campeones con una sola region o con mas de una, las regiones estan separadas del campeon con un - pero entre ellas estan separadas con una , 

Ejemplos practicos:
Thresh - Islas de la sombra
Morgana - Demacia, Targon
Kayn - Jonia, Noxus, Runaterra, Shurima

Con esto, el contador debera ser el siguiente:
 Demacia: 1
 Noxus: 1
 Jonia: 1
 Shurima: 1
 Vacio: 0
 Islas de la sombra: 1
 Piltover: 0
 Aguas estancadas: 0
 Ixtal: 0
 Freljord: 0
 Targon: 1
 Runaterra: 1
 Bandle: 0

Imagen de demostracion (debera quedar bastante similar):*/
$campeones = $_POST["campeones"];

$datosCampeones = explode("\n", $campeones);
$contadorRegiones = array();

foreach ($datosCampeones as $datosCampeon) {
    $datitosCampeon = explode("-", $datosCampeon);
    $campeon = trim($datitosCampeon[0]);
    $regiones = explode(",", trim($datitosCampeon[1]));

    foreach ($regiones as $region) {
        $region = trim($region);
        $contadorRegiones[$region] = isset($contadorRegiones[$region]) ? $contadorRegiones[$region] + 1 : 1;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Resultado del Contador</h2>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <?php
                    $ListaRegiones = array("Demacia", "Noxus", "Jonia", "Shurima", "Vacio", "Isla de la sombra", "Piltover", "Aguas Estancadas", "Ixtal", "Fredljord", "Targon", "Bandle", "Runaterra");
                    foreach ($ListaRegiones as $listaRegion) {
                        $contador = isset($contadorRegiones[$listaRegion]) ? $contadorRegiones[$listaRegion] : 0;
                        echo "<li class='list-group-item'>$listaRegion:$contador</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>