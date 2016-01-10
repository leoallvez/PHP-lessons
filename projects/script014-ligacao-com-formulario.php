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
				echo "A raiz de $valor é ".(number_format(sqrt($valor),2));
			?>
			<a href="script014-ligacao-com-formulario.html">Voltar</a>
		</div>
	</body>
</html>