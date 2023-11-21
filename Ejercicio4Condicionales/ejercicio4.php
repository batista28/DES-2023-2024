<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada de dados</title>
</head>

<body>
    <?php
    $dado1 = random_int(1,6);
    $dado2 = random_int(1,6);
    $dado3 = random_int(1,6);


    if ($dado1 == 1 && $dado2 == 1 && $dado3 == 1) {
        echo "<h2>Ha salido poker</h2>";
    } else if ($dado1 == $dado2 && $dado3 == $dado2) {
        echo "<H2>Ha salido trio</h2>";
    } else if ($dado1 == $dado2 || $dado1 == $dado3 || $dado2 == $dado3) {
        echo "<H2>Ha salido pareja</H2>";
    } else if (abs($dado1 - $dado2) == 1 && abs($dado3 - $dado1) == 1 ||abs($dado1 - $dado2) == 1 && abs($dado2 - $dado3) == 1 )  {
        echo "<h2> Ha salido escalera</h2>";
    } else {
        echo "<H2>No ha salido ninguna combinacion</H2>";
    }

 
        echo "<img src=\"dado$dado1.jpg\" alt=\"30\">";
        echo "<img src=\"dado$dado2.jpg\" alt=\"30\">";
        echo "<img src=\"dado$dado3.jpg\" alt=\"30\">";

   



    ?>
</body>

</html>