<!DOCTYPE html>
<html>
	<head>
		<title>Campus Calc</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="_css/style-calc.css">
	</head>
	<body>
		<div>
			<h2>Campus Calc<sup><span id="bet"> beta</span></sup></h2>
			<?php
			
				$m1 = number_format((isset($_GET["m1"])?$_GET["m1"]:0),1);
				$nd = number_format((isset($_GET["nd"])?$_GET["nd"]:0),1);
				$ni = number_format((isset($_GET["ni"])?$_GET["ni"]:0),1);
				$m2 = number_format((($nd * 0.70 )+( $ni * 0.30)),1);
				$med = (($m1 + ($m2 * 2)) / 3);

				if($med >= 5){
					$s = "Aprovado";
				}elseif(($med >= 3) && ($med <= 4.9)){
					$s = "De Exame";
				}else{
					$s = "Reprovado";
				}

				echo "<table border='2'> ";
				echo "<th colspan='4'>Resultados:</th>";
				echo "<tr>";
				echo "<td>Nota M1: </td> <td id='d'>$m1</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Nota Diciplina: </td><td id='d'>$nd</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Nota Integrada: </td><td id='d'>$ni</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Nota M2:</td><td id='d'> $m2 </td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Média Final:</td><td id='d'>".number_format($med,1)."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td> Status do Aluno:</td><td id='d'>$s</td>";
				echo "</tr>";
				echo "</table>";
				

				echo "</p>"
			?>
			</br>
			<a href="index.php">Voltar</a>
		</div>
	</body>
</html>