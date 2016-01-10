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
				$valor = $_GET["v"];
				echo "O valor enviado for $valor";
			?>
		</div>
	</body>
</html>