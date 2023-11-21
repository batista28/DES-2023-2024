<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de </title>
    <link rel="stylesheet" type="text/css" href="ejercicio6.css" />
</head>
<body>
  <h1>Juego de piedra, papel, tijera</h1>
<form action="Ejercicio6Juego.php"method="post">
<div>
<label for="numero1">Nombre de jugador 1</label>
<input type="text" name="nombreJ1" required>
</div>
<div>
<label for="numero2">Nombre de jugador 2</label>
<input type="text" name="nombreJ2" required>
</div>
<label for="cantidad de victoria">Cantidad de victorias</label>
<input type="number" name="cantidad" required>

   <button type="submit" class="btn btn-primary">Empezar la partida</button>

</form> 
</body>
</html>
