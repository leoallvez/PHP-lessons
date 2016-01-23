<!DOCTYPE html>
<html>
	<head>
		<title>PHP | trim()</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../_css/estilo.css">
	</head>
	<body>
		<div>
			<?php
				/*A a função trim() tira espaços antes e depois da string*/
				$s1 ="   Leonardo   ";

				echo "Quantidade de letras antes do trim(): ".strlen($s1)."</br>";

				$s2 = trim($s1);

				echo "Quantidade de letras depois do trim(): ".strlen($s2)."</br>";
			?>
		</div>
	</body>
</html>