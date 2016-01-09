<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Incrementos</title>
		<link rel="stylesheet" href="../_css/estilo.css">
	</head>
	<body>
		<div>
			<?php
				$atual = $_GET["aa"];
				echo "O ano atual é: ".$atual;
				#pré incremento.
				echo "</br>O ano anterior é: ".--$atual;
			?>
		</div>
	</body>
</html>