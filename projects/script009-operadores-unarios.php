<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../_css/estilo.css">
	</head>
	<body>
		<div>
			<?php
				$a = $_GET["x"];
				$b = $_GET["z"];
				echo "Valor recebido para A: ".$a;
				echo "</br> Valor recebido para B: ".$b;
				$r = ($a > $b) ? $a : $b;
				echo "</br>Maior valor é: ".$r;
			?>
		</div>
	</body>
</html>