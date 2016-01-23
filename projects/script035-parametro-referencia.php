<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../_css/estilo.css">
	</head>
	<body>
		<div>
			<?php
				/*Esse script mostra como funciona a passagem de valor por referencia.*/
				function teste(& $s){
					$s = $s + 1;
				}

				$a = 3;
				echo "Valor inicial: ".$a."</br>";
				teste($a);
				echo "Valor final: ".$a;
			?>
		</div>
	</body>
</html>