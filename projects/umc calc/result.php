<!DOCTYPE html>
<html>
	<head>
		<title>Campus Calc</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="_css/style-calc.css">
	</head>
	<body>
		<div>
			<h2>Campus Calc<sup><span id="bet"> beta</span></sup></h2>
			<p>Resultados: </p>
			<?php
			
				$m1 = number_format((isset($_GET["m1"])?$_GET["m1"]:0),1);
				$nd = number_format((isset($_GET["nd"])?$_GET["nd"]:0),1);
				$ni = number_format((isset($_GET["ni"])?$_GET["ni"]:0),1);

				echo "<p>";
				echo "Nota m1: $m1 </br>";
				echo "Nota diciplina: $nd </br>";
				echo "Nota Integrada: $ni </br>";

				$m2 = number_format((($nd * 0.70 )+( $ni * 0.30)),1);

				echo "Nota m2: $m2 </br>";

				$med = (($m1 + ($m2 * 2)) / 3);

				echo "Média: ".number_format($med,1)."</br>";
				if($med >= 5){
					echo "<span id='apr'>Aluno Aprovado</span>";
				}elseif(($med >= 3) && ($med <= 4.9)){
					echo "<span id='exa'>Aluno de Exame</span>";
				}else{
					echo "<span id='rep'>Aluno Reprovado</span>";
				}
				echo "</p>"
			?>
			</br>
			<a href="index.php">Voltar</a>
		</div>
	</body>
</html>