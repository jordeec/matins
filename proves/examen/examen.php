<?php

    $nota1=$_REQUEST["nota1"];
    $nota2=$_REQUEST["nota2"];

    if(is_numeric($nota1) && is_numeric($nota2) && esRangoAdmitido()){

        $media = (intval($nota1) + intval($nota2)) / 2;
        
        $mensaje = "Has suspendido";

        if($media >= 9) {
            $mensaje = "Sobresaliente";
        }elseif ($media >= 7){
            $mensaje = "Notable";
        }elseif ($media >= 5){
            $mensaje = "Suficiente";
        }

        echo "Tus notas son $nota1 y $nota2</br>";
        echo "Tu nota media es $media. $mensaje</br>";
        echo "</br>";
        
        header("refresh:5;url=\"examen.html\"");
        echo "Volverás a la página de entrada dentro de 5 segundos";

    }else{
        echo "Necesito las notas en formato numérico y con valores comprendidos entre 1 y 10 </br>";
        echo "Tu has puesto ".$_REQUEST["nota1"]." y ".$_REQUEST["nota2"];
        /* Dibujamos el enlace para volver atrás */
        echo "</br><a href='javascript:history.back();'>Volver atrás</a>";
    }

    
    function esRangoAdmitido(){

        $liRet=0;

        if( 
            (intval($_REQUEST["nota1"]) >= 0 && intval($_REQUEST["nota1"]) <=10) && 
            (intval($_REQUEST["nota2"]) >= 0 && intval($_REQUEST["nota2"]) <=10)
        ) { 
            $liRet = 1;
        }
        
        return $liRet;
    
    }

?>