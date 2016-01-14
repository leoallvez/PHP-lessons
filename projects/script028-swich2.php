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
				$dia = isset($_GET["dia"])?$_GET["dia"]:1;
				switch($dia){
					case 2:
					case 3:
					case 4:
					case 5:
					case 6:
						echo"Hoje é $dia dia de estudar";
					break;
					case 1:
					case 7:
						echo "Hoje não é $dia dia de estudar";
					break;
					default:
						echo "dia da semana invalido!";
					break;
				}
			?>
		</br><a href="script028-swich2.html"/>Voltar</a>
		</div>
	</body>
</html>