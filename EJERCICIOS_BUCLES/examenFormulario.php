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
    <!--
   Crear una página web en php que muestre un formulario con los siguientes campos, Con información sobre una tienda manga y su stock en los almacenes.

Nombre texto-v
Física(checkbox si/no)-v
dirección texto-v
provincia (desplegable, todas las provincias andaluzas)-v
Presupuesto range con steps de 1 unidad 15-150-v
fecha apertura tienda (date)
Tomos Manga Área de Texto-v
Botón Solicitud-v

Los tomos se introducirán en un área de texto, en cada línea (Recordar que \n es separador de línea) se introduce una fase en el siguiente formato:

one piece, tomo 23, 324, 5, shonen, S, Málaga 

Siendo los datos, nombre, detalle,paginas, unidades en stock, categoria (shonen, shojo, kodomo)  ,Edición coleccionista (S/N) y almacén (Provincias Andaluzas) separados por ‘,’

Cuando se pulse el botón, se enviará a otra página php que realizara lo siguiente:

 -->
</head>

<body>

    <div class="container-sm  pt-4 pl-4 pr-4">
        <div class="row">
            <div class="col-7 p-5">
                <!--El formulario envia con el metodo post los datos -->
                <form method="post" action="examenServidor.php">

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nombre : </span>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre ">
                    </div>
                    <div class="mb-3">
                        <label for="fisica" class="form-label">Fisica</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="si" id="fisica_si" name="fisica[]">
                            <label class="form-check-label" for="fisica_si">si</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="no" id="fisica_no" name="fisica[]">
                            <label class="form-check-label" for="fisica_si">no</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Direccion: </span>
                        <input type="text" name="direccion" class="form-control" placeholder="Direccion">
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text" id="categoria">Provincia: </span>
                        <select name="provincia" class="form-select col-5" aria-label="categoria">
                            <option selected>Seleciona tu Provincia</option>
                            <option value=alevin>Malaga</option>
                            <option value=general>Jaen</option>
                            <option value=veteranos>Cordoba</option>
                            <option value=alevin>Cadiz</option>
                            <option value=general>Huelva</option>
                            <option value=veteranos>Granada</option>
                            <option value=alevin>Almeria</option>
                            <option value=general>Sevilla</option>

                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Presupuesto: </span>
                        <input type="range" name="presupuesto" class="form-control" max=150 min=15 step=1>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha de Apertura Tienda:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Tomos Manga:<br> </span>
                        <textarea name="txtTomos" class="form-control" cols=50 rows=10></textarea>
                    </div>



                    <div class="container-sm col-12 pt-3">
                        <!-- este boton lanza el formulario al ser tipo submit -->
                        <button class="btn btn-primary" type="submit">Solicitud</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>