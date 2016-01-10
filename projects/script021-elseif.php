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
				$sal = 1800;
				echo "Salario R$: ".$sal." ";
				if($sal < 1250){
					echo "Remuneração isenta de imposto!";
				}elseif($sal >= 1250 && $sal < 1800){
					echo "Retenção de 5% para imposto mensal";
				}elseif($sal >= 1800 && $sal < 2200){
					echo "Retenção de 7% para imposto mensal";
				}else{
					echo "Retenção de 9% para imposto mensal";
				}
			?>
		</div>
	</body>
</html>