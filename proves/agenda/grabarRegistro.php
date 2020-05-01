<?php

    
    $formularioOK = false;
    $grabarOK = false;

    echo "<pre>";
    print_r($_REQUEST);
    
    $formularioEnviado = isset($_REQUEST["nombre"]) &&  isset($_REQUEST["apellidos"]) &&  isset($_REQUEST["e-mail"]);

    var_dump($formularioEnviado);

    /** Si hay datos con los que trabajar los procesamos */
    if($formularioEnviado){

        $formularioOK = validarDatos();

        if ($formularioOK){
            $grabarOK = grabarDatos();            
        }
    }

    imprimirStatus($formularioOK, $grabarOK);

    echo "</pre>";

    /* Validación de todos los campos del formulario */
    function validarDatos(){

        global $errores;

        $lbRet = true;

        var_dump($errores);
        
        if(estaVacio($_REQUEST["nombre"])) {
            array_push($errores, "El nombre no puede estar vacío.");
            $lbRet = false;
        }

        if(estaVacio($_REQUEST["apellidos"])) {
            array_push($errores, "Los apellidos no pueden estar vacíos.");
            $lbRet = false;
        }

        if(estaVacio($_REQUEST["e-mail"])) {
            array_push($errores, "El e-mail no puede estar vacío.");
            $lbRet = false;
        }elseif (!filter_var($_REQUEST["e-mail"], FILTER_VALIDATE_EMAIL)){
            array_push($errores, "El formato del e-mail no es válido.");
            $lbRet;
        }

        return $lbRet;
    }

    function grabarDatos(){
        return false;

    }

    function imprimirStatus($formularioOK, $grabarOK){
        echo "Status del formulario<pre>";
        var_export($formularioOK);
        var_export($grabarOK);
        echo "</pre>";
    }

    function estaVacio($campo){
        return strlen($campo) <= 0;
    }

    



?>