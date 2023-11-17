<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include "php/global.php";
    ?>
</head>
<body>
    <form action="" method="post">

<?php 
for ($i=0; $i <13 ; $i++) { 
  echo  "<tr>";

  for ($j=0; $j <4 ; $j++) { 
    echo  "<td>\n";
    echo "<label>$nombre_carta[$i] de $nombre_palo[$j]</label>\n";
    echo "<input type='checkbox' name='lista_cartas' value='".$i."-".$j. '/>\n';
    echo "</td>\n";
  }
  
}
echo "</tr>";
echo"<button> class=btn type=submit>'Enviar Cartas'</button>";
?>
</body>
</html>