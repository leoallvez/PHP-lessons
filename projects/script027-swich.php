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
				$n = isset($_GET["num"])?$_GET["num"]:0;
				$o = isset($_GET["oper"])?$_GET["oper"]:1;
				switch($o){
					case 1: $r = $n * 2; break;
					case 2: $r = ($n * $n) * $n; break;
					case 3: $r = sqrt($n); break;
					#default: echo "Número invalido.";
				}
				echo "O resultado da operação solicitada foi $r.";
			?>
		</br><a href="script027-swich.html">Voltar</a>
		</div>
	</body>
</html>