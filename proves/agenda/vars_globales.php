 <?php

    // Algunas constantes para trabajar más limpio
    $_FICHERO_DATOS = "data.csv";     // Nombre del fichero que guardaremos
    $_REG_SEPARADOR = ";";                // Carácter separador
    $_REGISTRO_SIZE = 1000;           // Tamaño máximo de registro
    $_FICH_VACIO_MSG = "El fichero de datos está vacío";

    // Variables de control de la aplicación
    $existeFichero = false;         // Nos dice si el fichero existe
    $hayDatos = false;              // Nos indica si el fichero tiene contenido
    $formularioOK = false;

    // Variables con el contenido de la aplicación
    $lineasFichero = [];            // Contendrá el contenido del fichero pero en memoria
    $datosLinea = [];               // Lo usaremos para leer las columnas de cada línea
    $errores =  [];              // Lista de errores producidos

?>