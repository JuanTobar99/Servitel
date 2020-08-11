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
    <script>
        document.addEventListener("DOMContentLoaded", function(e) {
            var miForm = document.getElementById('forms');
            miForm.onsubmit = function(e) {
                e.preventDefault();
            var formData = new FormData(this);  
            var jsonData = {};
            for (var [k, v] of formData) {
                jsonData[k] = v;
            }
            jsonData = JSON.stringify(jsonData);
            
            const peti = new XMLHttpRequest();

            peti.open("POST", "ajax/Crea_cliente.php");
            peti.setRequestHeader("Content-type", "application/json");
            peti.send(jsonData);

            }
        });
        
    </script>
</head>
<body>
    <div class="blue-grey darken-4" id="Cabecera">
        <div id="Info">
            <div class="row">
                <div class="col s12"> Nuevo cliente </div>
            </div>
        </div>

    </div>
    <div id="Contenido">
        <form action="" method="post" id="forms">
            <div class="row">
                <div class="col s1"></div>
                <div class="col s5">
                    <label>Nombre completo</label>
                    <input type="text" name="name" id="name" placeholder="Nombre completo" required>                
                </div>
                <div class="col s1"></div>
                <div class="col s4">
                    <label>Número de documento</label>
                    <input type="text" name="cc" id="cc" placeholder="Número de documento" required>
                </div>
                <div class="col s1"></div>
            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="col s3">
                    <label>Fecha de nacimiento</label>
                    <input type="text" name="birth" id="birth" placeholder="yyyy/mm/dd" required>                
                </div>
                <div class="col s1"></div>
                <div class="col s6">
                    <label>Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="col s1"></div>
            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="col s10">
                    <hr>
                </div>
                <div class="col s1"></div>
            </div>
            <div class="row">
                <div class="col s10 right-align">
                    <input type="button" class="red" value="Cancelar" onclick="location.href = 'index.php';">
                </div>
                <div class="col s2">         
                    <input type="submit" class="blue" id="save" onclick="alert('Se guardo registro exitosamente!!'); location.href = 'index.php';" value="Guardar">     
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>