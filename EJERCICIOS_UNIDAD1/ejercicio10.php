<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de nota media</title>
 
</head>

<body>
  <form method="post">

    <?php
    for ($x = 1; $x <= 5; $x++) {

      for ($i = 1; $i <= 3; $i++) {
        echo "<label for='asignatura$i'>nombre de la asignatura $i: </label> ";
        echo "<input type='text' name='asignatura$i' required ";

        echo "<label for='nota$i'>nota de la asignatura $i: </label> ";
        echo "<input type='number' name='nota$i'step='.001' required <br> ";

      }

 
    }
   echo "<input type='submit' value='CALCULAR'>";

    ?>
  </form>
  <?php

  if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $suma_nota = 0;
    for ($x = 1; $x <= 5; $x++) {
      for ($i = 1; $i <= 3; $i++) {
        $notas = ($_POST["nota$i"]);
        $suma_nota += $notas;
      }
    }

    $nota_media = round($suma_nota / 15, 1);
    echo "<h2> la nota media es: $nota_media</h2>";

  }


  ?>
</body>

</html>