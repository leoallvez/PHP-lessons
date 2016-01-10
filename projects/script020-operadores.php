<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lição de Php</title>
		<link rel="stylesheet" href="../_css/estilo.css">
	</head>
	<body>
		<div>
			<?php
				/*
				Entrada de valores pela url:
				http://127.0.0.1/projects/script003.php?a=5&b=8
				*/
				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				echo "<h2>Valores recebidos: $n1 e $n2</h2>";
				$m 	= ($n1 + $n2) / 2;
				echo "A soma vale: ".($n1+$n2);
				echo "</br>A soma subtração vale: ".($n1-$n2);
				echo "</br>A soma multiplicação vale: ".($n1*$n2);
				echo "</br>A soma divisão vale: ".($n1/$n2);
				echo "</br>A soma modulo vale: ".($n1%$n2);
				echo "</br>A média vale: $m";
			?>
		</div>
	</body>
</html>