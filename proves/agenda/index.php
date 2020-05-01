<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda d'alumnes</title>
    <!-- Baixem només el CSS de Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php
         require("vars_globales.php");
         require("initFichero.php");
    ?>
    <h1>Agenda en PHP + Ficheros</h1>
    <div class="container-fluid">
        <div class="row">            
            <div class="col-md">
                <h2>Alumnos</h2>
                <div class="row">
                    <div class="col w-25">
                        <ul class="h-25 overflow-auto">
                            <?php
                                require("generarListado.php");                            
                            ?>                                            
                        </ul>
                    </div>                    
                </div>
            </div>
            <div class="col-md1">
                <h2>Acciones</h2>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <button id="modificar" disabled>Modificar</button>
                        </div>
                        <div class="row">
                            <button id="borrar" disabled> Borrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h2>Formulario</h2>
                <form action="grabarRegistro.php">
                    <div class="row">
                        <div class="col"><label for="nombre">Nombre</label></div>
                        <div class="col"><input type="text" name="nombre" id="nombre"></div>
                    </div>
                    <div class="row">
                        <div class="col"><label for="apellidos">Apellidos</label></div>
                        <div class="col"><input type="text" name="apellidos" id="apellidos"></div>
                    </div>
                    <div class="row">
                        <div class="col"><label for="e-mail">E-mail</label></div>
                        <div class="col"><input type="text" name="e-mail" id="e-mail"></div>
                    </div>
                    <div class="row">
                        <div class="col"><button type="reset" value="limpiar">Limpiar</button></div>
                        <div class="col"><button type="submit" value="insertar">Guardar</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>