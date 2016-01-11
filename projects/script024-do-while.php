<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Estruturas de controle</title>
		<link rel="stylesheet" href="../_css/estilo.css">
	</head>
	<body>
		<div>
			<?php
				$n = 0;
				$verdadeiro = true;
				do{
					echo $n++."</br>";
					if($n == 1000){
						break;
					}
				}while($verdadeiro);
			?>
		</div>
	</body>
</html>