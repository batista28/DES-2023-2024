<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>datos de nombre y direccion</title>
</head>
<body>
<form method="post" >
 
    <label for="nombre">NOMBRE USUARIO</label>
    <input type="text" name="nombre" >
   
    <label for="direccion">DIRECCION USUARIO</label>
    <input type="text" name="direccion"> 
    <input type="submit" value="Enviar">
</form>
<?php
 if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $nombre = ($_POST["nombre"]);
    $direccion = ($_POST["direccion"]);


    echo "<br>  $nombre's adress is $direccion ";
   
}
?>



</body>
</html>