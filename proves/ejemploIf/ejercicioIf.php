<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con IF en PHP</title>
</head>

<body>

    <?php
    
    //$nombre = "Jordi";
    //$edad=18;

    $nombre = $_REQUEST["nombre"];

    $edad = $_POST['edad'];

    /* La comparación con == compara la igualdad igual que en el resto de lenguajes de programación */
    if($nombre=="Jordi" && $edad>=18){
        echo "Bienvenido $nombre de $edad años";
    }else {
        echo "Bienvenido invitado. Te llamas $nombre y tienes $edad años";
    }

    /* La comparación con === compara también el tipo de objeto  
    
        == probada igualdad -> "5" == 5; (true)
        === probada igualdad -> "5" == 5; (false) Porque el string "5" no es igual que el integer 5

    */

    echo "zzzzzzzzzzz";

    ?>

</body>

</html>