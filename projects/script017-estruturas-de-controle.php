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
				$desc = number_format(10,2);
				if($desc != 0){
					echo "O desconto do mês foi R$ ".$desc;
				}else{
					echo "Não houve desconto!";
				}
			?>
		</div>
	</body>
</html>