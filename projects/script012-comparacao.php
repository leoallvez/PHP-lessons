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
				$nota1 = $_GET["n1"];
				$nota2 = $_GET["n2"];
				$m = ($nota1 + $nota2) / 2;
				echo "A media de $nota1 e $nota2 é $m</br>";
				#concatenação com operador unario;
				echo "Você  esta ".(($m >= 6) ? "Aprovado":"Reprovado");
			?>
		</div>
	</body>
</html>