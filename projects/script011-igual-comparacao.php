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
				$a = 3;
				$b = "3";
				/*Para comparar se as variaveis são
				iguais ou identicas basta mudar o valor de
				da comparação unaria == ou ===*/
				$r =  $a == $b ? "Sim":"Não";
				echo "As variaveis A e B são iguais? ".$r;
			?>
		</div>
	</body>
<html>