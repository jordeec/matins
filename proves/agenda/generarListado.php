<?php
    /* 
        Este PHP ya trabaja directamente con el array en memoria, que hemos cargado
        cuando hemos inicializado el fichero de datos 
    */
    $_CONTENIDO = "@@contenido@@";
    $_NUMFILA = "@@numeroFila@@";
    $tipoAlerta = $hayDatos ? "list-group-item-light" : "list-group-item-dark";
    $idFila = 0;
    $plantillaElemento = "<li id=\"fila%i\" class=\"list-group-item %s \">%s</li>";

   // El array siempre tendrá contenido, aunque sea el mensaje de error, lo mostraremos dentro
   // de elementos <li>
    if($hayDatos){
        // Recorremos las líneas del fichero, que es un array ...
        foreach($lineasFichero as $key => $valor){
            // ... y lo metemos en otro array que son las "columnas" que hay en cada línea
            $datosLinea = $lineasFichero[$key];
            // Solo mostramos un par de campos (Nombre y apellidos)
            $mensaje = $datosLinea[0]." ".$datosLinea[1];

            // Pintamos en pantalla
            printf($plantillaElemento, $idFila, $tipoAlerta, $mensaje);
            //$plantillaElemento = str_replace($_CONTENIDO, $mensaje, $plantillaElemento);
            //$plantillaElemento = str_replace($_NUMFILA, $idFila, $plantillaElemento);
            
            // Incrementamos el id para que la fila siguiente tenga un número más
            $idFila++;
        }
    }else{
        
        // Cuando no hay datos, el array está vacío y sólamente enseñamos el primer elemento 
        // que hemos guardado en initFichero.php:26
        
        // Pintamos en pantalla
        echo(str_replace($_CONTENIDO, $lineasFichero[0], $plantillaElemento));
    }

    /* La magia de la función str_replace:
        
    Sustituye el primer parámetro por lo que venga en el segundo parámetro dentro de lo que 
    le pasemos en el tercero

    */

?>