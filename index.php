<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servitel Portal Web</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body onload="Buscar();">
    <div class="blue-grey darken-4" id="Cabecera">
        <div id="Info">
            <div class="row">
                <div class="col s10"> Listado clientes </div>
                <div class="col s2"> <a href="create.php" class="waves-effect waves-light btn light-blue darken-2"><b><i class="material-icons left medium">add</i></b>Nuevo cliente</a> </div>
            </div>
        </div>

    </div>
    <div id="Contenido">
        <div class="row">
            <div class="col s1"></div>
            <div class="col s9">
                <input type="text" id="param" placeholder="Buscar..." onkeyup="Buscar();">
            </div>
            <div class="col s2"></div>
        </div>
        <br />
        <div class="row">
            <div class="col s1"></div>
            <div class="col s10" id="consulta">

            </div>
            <div class="col s1"></div>
        </div>
    </div>

    <script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>