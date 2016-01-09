<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP</title>
		<link rel="stylesheet" href="../_css/estilo.css">
	</head>
	<body>
		<div>
			<?php
				$preco = $_GET["p"];
				/* number_format()* função aritmetica que tranforma inteiro em real*/
				echo "O preco do preço do produto é: ".number_format($preco,2);
				$preco += ($preco*10/100);
				echo "</br>com + 10% é ".number_format($preco,2);
			?>
		</div>
	</body>
</html>