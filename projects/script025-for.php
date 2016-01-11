<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>For</title>
		<link rel="stylesheet" href="../_css/estilo.css">
		<style>
			table{
				border: 1px solid #000;
			}
			tr{
				height: 10px;
				width: 10px;
			}
			td{
				height: 10px;
				width: 10px;
				text-align: center;
				background-color: #fff;
				padding: 5px;
			}
		</style>
	</head>
	<body>
		<div>
			<?php
				/*Esse script cria uma tabela de tabuada inamicamente*/
				$n = 6;
				echo"<p>Tabuada do $n</p>";
				echo "<table>";
				for($valor = 0; $valor <= 10; 1){
					echo "<tr><td>$valor</td><td>x</td><td>$n</td><td>=</td><td>".$valor*$n."</td></tr>";
					$valor++;
				}
				echo "</table>";
			?>
		</div>
	</body>
</html>