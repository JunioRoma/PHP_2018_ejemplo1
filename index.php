<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title> PRUEBA DE PHP CON BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: pink">
        <div class="container" id="principal">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Ejemplo inicio sesión</h2>
                </div>  
            </div>
            <div class="row">
                <div class="col-4">
                    <!Varios tipo de botones caracteristicos en bootstrap-->

                    <!--                <button type="button" class="btn btn-secondary">Secondary</button>
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-light">Light</button>
                                        <button type="button" class="btn btn-dark">Dark</button>-->
                </div>
                <div class="col-4">
                    <br/><br/>

                    <input id="cajaNombre" class="form-control" type="text" placeholder="Usuario" required>

                    <input id="cajaPassword" class="form-control"type="password" placeholder="Contraseña" required>

                    <br/>
                    <button id="boton1" class="btn btn-primary btn-block" type="submit">ENTRAR</button>
                    <br/>

                </div>
                <div class="col-4"></div>

            </div>
        </div>

    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
        //document ready se ejecuta cuando toda la pagina se ha cargado correctamente
        $(document).ready(function () {
//            $('#cajaNombre').hide();
        });

        $.validate({
            lang: 'es'
        });

        //arriba el hide lo ocultaba nada mas cargar la pagina y 
        //ahora al pulsar le boton conseguimos con el show q vuelva con un intervalo de 100 milisegundos.
        $('#boton1').click(function () {
            //Leo el contenido de las cajas de nombre y cnotraseña.
            var _cajaNombre = $('#cajaNombre').val();
            var _cajaPassword = $('#cajaPassword').val();

            $('#principal').load("login.php", {
                    cajaNombre : _cajaNombre ,
                    cajaPassword : _cajaPassword
                });
        });
    </script>


</html>
