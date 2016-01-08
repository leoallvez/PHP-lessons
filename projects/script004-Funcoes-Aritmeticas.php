<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lição de Php</title>
		<link rel="stylesheet" href="../_css/estilo.css">
		<style>
			h2{
				color: green;
			}
		</style>
	</head>
	<body>
		<div>
			<?php
				/*
				Entrada de valores pela url:
				http://127.0.0.1/projects/script003.php?a=4&b=-3
				*/
				$v1 = $_GET["x"];
				$v2 = $_GET["y"];
				echo "<h2>Valores recebidos $v1 e $v2</h2>";
				echo "Valor absoluto de $v2 é: ".abs($v2);
				echo "</br>
				Valor de $v1<sup>$v2</sup> é: ".pow($v1,$v2);
				echo "</br>A raiz de $v1 é ".sqrt($v1);
				echo "</br> O valor de $v2 arredondado é ".round($v2);
				echo "</br> A parte inteira de $v2 é ".intval($v2);
				echo "</br> O valor de $v1 em moeda é R$ ".number_format($v1,2,",",".");


			?>
		</div>
	</body>
</html>