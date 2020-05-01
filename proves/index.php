<?php

$nombre = "Jordi";
$nombre .= "Calderón"

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>

<body>
	<h1>Titular estático HTML</h1>

	<?php

	echo "<h2>hola mundo en PHP</h2>";
	echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro quis ratione hic facere vel voluptatum explicabo quidem. Eveniet expedita deleniti laborum quaerat. Saepe, veritatis in vero adipisci harum rem non!";
	echo "<br>Tu nombre es $nombre ahora te enseño el carácter 300$ $300 \$dolar (dolar)";

	$hola = "buenos días";
	echo "<br/>" . $hola;
	?>

	<pre style="background-color: #ccc;border: 1p solid red">
		<code>
			<?php 
				echo "\$hola=$hola";

				$verdadero = true;
				$falso = false;

				echo "<br/>El valor de la variable \$verdadero es $verdadero";
				echo "<br/>El valor de la variable \$falso es$falso";

				var_dump($hola);
				var_dump($verdadero);
				var_dump($falso);

				$diassemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

				echo $diassemana[0]."<br/>";

				$verduras = ["verdura1" => "Lechuga", "verdura2" => "Espinacas", "verdura3" => "Nabo"];

				echo $verduras["verdura2"]."<br/>";

				var_dump($verduras["verdura2"]);

				echo "**************<br/>";

				$verdurasObj = (object)["verdura1" => "Lechuga", "verdura2" => "Espinacas", "verdura3" => "Nabo"];
				
				var_dump($verdurasObj);
				echo "**************<br/>";

				echo $verdurasObj["verdura2"]."<br/>";


			?>
		</code>
	</pre>

</body>

</html>