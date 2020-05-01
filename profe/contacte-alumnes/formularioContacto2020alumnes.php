<?php

    $error = ""; $mensajeExito = "";


/*Recordad que os propuse validar un mail con nombre y correo electrónico y que investigueis filter_var(filtros en php.net)Por tanto en este caso quiero :
que comprobéis el funcionamiento de la validación en jQuery que os dejo, luego añadais la de Php mirando que esten vacios los campos, luego que email sea un email, y que nombre tenga entre 2 y 30 carácteres.
Querrétambién  que tanto la validación de jQuery cómo la de Php y el formularioen html queden en archivos externos..  os dejo muestra en la carpeta del ejercicio. mostra includes.png.
Por último que podais desactivar jquery y podáis comprobar la validación de php, la identificareis por colores.*/


        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>Hubo algún error en el formulario:</p>' . $error . '</div>';
            
        } else {

            $emailto = "me@mydomain.com";
            
            $cabeceras = "From: ".$email;
            
            if (mail($emailto, $asunto, $contenido, $cabeceras)) {
                
                $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado con éxito, nos pondremos en contacto pronto!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>El mensaje no pudo ser enviado, por favor inténtalo más tarde</div>';  
                
            }
            
        }
      
      ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css"
        integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <h1>Contacta con nosotros</h1>

        <div id="error"> <?php
        
         echo $error.$mensajeExito ?></div>

        <form method="post" action="">
            <fieldset class="form-group">
                <label for="email">Dirección de email</label>
                <input type="text" class="form-control" id="email" name="email" value="">
                <small class="text-muted">Nunca compartiremos tu email con nadie.</small>
            </fieldset>
            <fieldset class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" value="">
            </fieldset>
            <fieldset class="form-group">
                <label for="contenido">¿Qué te gustaría preguntarnos?</label>
                <textarea class="form-control" id="contenido" name="contenido" rows="3" value=">"></textarea>
            </fieldset>
            <button type="submit" name="enviar" id="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>


    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"
        integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous">
    </script>


    <script type="text/javascript">
    $("form").submit(function(e) {

        var error = "";

        if ($("#email").val() == "") {

            error += "Campo email obligatorio.<br>"

        }

        if ($("#asunto").val() == "") {

            error += "Campo asunto obligatorio.<br>"

        }

        if ($("#contenido").val() == "") {

            error += "Campo contenido obligatorio.<br>"

        }

        if (error != "") {

            $("#error").html(
                '<div class="alert alert-danger" role="alert"><p><strong>Hubo algún error en el formulario</strong></p>' +
                error + '</div>');

            return false;

        } else {

            return true;

        }
    })
    </script>

</body>

</html>