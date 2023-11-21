<!DOCTYPE html>
<html>
<head>
    <title>document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>Verificar Mano de Poker</h1>
    <form action="verificar_poker.php" method="post">
        <?php
       
        $cartas = array(
           1  => 'As',
            2  =>'Dos',
            3 => 'Tres',
            4 => 'Cuatro',
            5 => 'Cinco',
            6 =>'Seis' ,
            7 =>'Siete' ,
            8 =>'Ocho',
            9  =>'Nueve',
            10 =>'Diez' ,
            11=>'J' ,
            12 => 'Q',
            13 =>'K' 
        );

        // Define un array para los palos
        $palos = array('Corazones', 'Diamantes', 'Treboles', 'Picas');

        for ($i = 1; $i <= 5; $i++) {
            echo "<label>Carta $i:</label>
                <select class='form-select' name='carta$i'>";
            foreach ($cartas as $nombre_carta => $valor_carta) {
                foreach ($palos as $palo) {
                    $nombre_completo = "$nombre_carta$palo";
                    echo "<option value='$nombre_completo'>$nombre_completo</option>";
            
                }
            }
            echo "</select><br>";
        }
        ?>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
