<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario del Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
   
</head>

<body>

    <h1>Contador de Regiones</h1>
    <form method="post" action="contador.php">

        <div class="input-group mb-3">
            <label class="input-group-text" id="txtCampeones">campeones: </label>
            <textarea name="campeones" class="form-control" cols=50 rows=10></textarea>
        </div>

        <div class="container-sm col-12 pt-3">
            <!-- este boton lanza el formulario al ser tipo submit -->
            <button class="btn btn-primary" type="submit">Contar regionesr</button>
        </div>

    </form>
    </div>
    </div>
    </div>

</body>

</html>