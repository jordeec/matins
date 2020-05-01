<?php 
    /** Si el fichero de datos existe, lo leemos, sino, lo creamos */
    $existeFichero = file_exists($_FICHERO_DATOS);

    if($existeFichero){
        $fichero = fopen($_FICHERO_DATOS, "r");
        if ($fichero){
            // Mientras puedas seguir leyendo el fichero de datos 
            $contador=0;
            while (($datosLinea = fgetcsv($fichero, $_REGISTRO_SIZE, $_REG_SEPARADOR)) == TRUE )  {
                $lineasFichero[] = $datosLinea;
                $contador++;                                
            }
            fclose($fichero);
            $hayDatos = $contador > 0;         
        }
    }else {
        $fichero = fopen($_FICHERO_DATOS, "a+");
        if($fichero){
            fclose($fichero);
        }               
    }

    // Metemos algo en el array para que se pueda mostrar alguna cosa
    if(!$hayDatos) {
        $lineasFichero[0] = $_FICH_VACIO_MSG;
    }
    
   ?> 
    
