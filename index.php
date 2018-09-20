<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> PRUEBA DE PHP CON BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <!Varios tipo de botones caracteristicos en bootstrap-->
                    <button id="boton1" class="btn btn-primary">Primary</button>
<!--                <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>-->
                </div>
                <div class="col-4">
                    <input id="cajaNombre" type="text" placeholder="Usuario">
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>

    <script>
        //document ready se ejecuta cuando toda la pagina se ha cargado correctamente
        $(document).ready(function(){
            $('#cajaNombre').hide();
        });
   
        //arriba el hide lo ocultaba nada mas cargar la pagina y 
        //ahora al pulsar le boton conseguimos con el show q vuelva con un intervalo de 100 milisegundos.
        $('#boton1').click(function () {
            $('#cajaNombre').show(100);
        });
    </script>


</html>
