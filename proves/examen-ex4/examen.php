<?php

/* Solamente trabajamos si nos han enviado el parámetro "notas" desde el formulario,
    sino, volvemos al formulario */

$notas = "";
$mensajes = [""];
$hayErrores = false;
$mostrarResultados = false;
$claseMensaje = "list-group-item-success";

if (isset($_POST["Enviar"]) && !estaVacioFormulario($_POST["notas"])) {
    $notas = $_REQUEST["notas"];
    $mostrarResultados = true;

    foreach ($notas as $key => $valor) {

        //Marranada para reemplazar el carácter decimal
        $valor = str_replace(",", ".", $valor);

        if (!is_numeric($valor)) {
            array_push($mensajes, "La nota " . ($key + 1) . " no es numérica. Has puesto ($valor)");
            $hayErrores = true;
        } else {
            if (!esRangoAdmitido(intval($valor))) {
                array_push($mensajes, "La nota $key no tiene el rango permitido. Has puesto ($valor) y sólo admito números del 0 al 10");
                $hayErrores = true;
            }
        }
    }

    if (!$hayErrores) {
        $media = array_sum($notas) / count($notas);

        $mensaje = "Has suspendido";

        switch ($media) {
            case $media >= 9:
                $mensaje = "Sobresaliente";
                break;
            case $media >= 7:
                $mensaje = "Notable";
                break;
            case $media >= 5:
                $mensaje = "Suficiente";
                break;
        }

        array_push($mensajes, "Tu nota media es $media. $mensaje.");
    } else {
        array_unshift($mensajes, "Se han producido los siguientes errores: ");
    }
}

function esRangoAdmitido($valor)
{
    return (intval($valor) >= 0 && intval($valor) <= 10);
}

function estaVacioFormulario($array)
{
    $liRet = true;

    foreach ($array as $key => $valor) {
        if (strlen($valor) > 0) {
            $liRet = false;
        }
    }

    return $liRet;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Baixem només el CSS de Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Ejercicio de examen</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Ejercicio notas medias</h1>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="notas">Primera Nota:</label>
                <input type="text" name="notas[0]" class="col-sm-8" id="formGroupExampleInput" placeholder="0..10">
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="notas">Segunda Nota:</label>
                <input type="text" name="notas[1]" class="col-sm-8" id="formGroupExampleInput" placeholder="0..10">
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="notas">Tercera Nota:</label>
                <input type="text" name="notas[2]" class="col-sm-8" id="formGroupExampleInput" placeholder="0..10">
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="notas">Cuarta Nota:</label>
                <input type="text" name="notas[3]" class="col-sm-8" id="formGroupExampleInput" placeholder="0..10">
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="notas">Quinta Nota:</label>
                <input type="text" name="notas[4]" class="col-sm-8" id="formGroupExampleInput" placeholder="0..10">
            </div>
            <?php

            if ($mostrarResultados) {
                $listaMensajes = "<ul>";

                if ($hayErrores) {
                    $claseMensaje = "list-group-item-danger";
                }

                foreach ($mensajes as $key => $valor) {
                    if (strlen($valor) > 0) {
                        $listaMensajes . printf("<li class=\"list-group-item %s\">%s</li>", $claseMensaje, $valor);
                    }
                }
                $listaMensajes . "</ul>";
            }

            ?>

            <button type="submit" class="btn btn-primary" name="Enviar">Enviar</button>
        </form>
    </div>
</body>