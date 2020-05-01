<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Baixem només el CSS de Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exemples de bucles en PHP</title>
    <?php

        $nombres = ["Pepe", "Pepon","Pepin", "Pepita"];

    ?>
</head>
<body>
    <div class="container-fluid">
        <h1>Exercici amb bucles</h1>
        <div class="p-3 mb-2 bg-warning text-black">
            <?php

                echo "Recorriendo nombres con for<br/>";
           
                for($i=0; $i < count($nombres) ;$i++){
                    echo "$nombres[$i]<br/>";
                }

            ?>
        </div>

        <div class="p-3 mb-2 bg-danger text-black">
            <?php

                echo "Recorriendo nombres con while <br/>";

                $i=0;

                while($i < sizeof($nombres)){
                    echo "$nombres[$i]<br/>";
                    $i++;
                }

            ?>
        </div>

        <div class="p-3 mb-2 bg-info text-black">
            <?php

                echo "Recorriendo nombres con foreach <br/>";

                foreach($nombres as $indice){
                    echo "$indice<br/>";
                }        

            ?>
        </div>

        <div class="p-3 mb-2 bg-secondary text-black">
            <?php

                echo "Recorriendo nombres con foreach (segunda version) <br/>";

                $nombresAsoc = ["Padre" => "Pepe", "Madre" => "Pepon", "Espíritu Santo" => "Pepin", "Hijo" => "Pepita"];


                /* Con esta estructura podemos identificar la clave y el valor del array */
                foreach($nombresAsoc as $key => $valor){
                    echo "$key = $valor <br/>";
                }        

            ?>
        </div>


        
    </div>
</body>
</html>