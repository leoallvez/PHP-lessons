<!DOCTYPE html>
<html>
	<head>
		<title>PHP | Include</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../_css/estilo.css">
	</head>
	<body>
		<div>

			<?php
				/*Esse script mostra como funciona 
				o include de codigos externos no PHP*/
				include("scripts.php");

				mostra("Ola mundo!");

				$soma = soma(1,300);

				echo "Soma = $soma";
			?>
		</div>
	</body>
</html>