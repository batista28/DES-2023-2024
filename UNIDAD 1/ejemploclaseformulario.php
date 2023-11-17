<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container-sm">
        <!-- Content here -->

        <form method="post" action="ejemplo3recepcion.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NOMBRE USUARIO</label>
    <input type="text" name="nombre" class="form-control" placeholderid="Nombre usuario" >
    <div id="emailHelp" class="form-text">nombre.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">TELEFONO</label>
    <input type="phone"  name="telefono" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <span class="input-group-text" id="basic.addon1">Edad: </span>
  <select class="form-select" name="edad" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <?php 
  for($i=1;$i<141;$i++){
  echo "<option value=$i > $i </option>";
  }
  ?>

</select>
  </div>
  <button class="btn btn-primary" type="submit">Enviar Formulario</button>
</form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>