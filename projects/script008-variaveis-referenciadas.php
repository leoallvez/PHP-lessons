<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="../_css/estilo.css">
</head>
	<body>
		<div>
			<?php
				$a = 3;
				#Criando uma referencia de a em b
				$b = &$a;
				/*Aqui como b é uma referencia
				 de a ele muda o valor de a*/
				$b = 5;
				echo "O valor de a é: ".$a;
				echo "</br>O valor de b é: ".$b;
			?>
		</div>
	</body>
</html>