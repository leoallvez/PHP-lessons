<!DOCTYPE html>
<html>
	<head>
		<title>Campus Calc | Resultados</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="_css/style-calc.css" media="screen and (color)">
		<link rel="stylesheet" href="_css/mobile.css" media="(max-width: 720px)">
	</head>
	<body>
		<div id="principal">
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
			?>
			<table border='2'> 
				<th colspan='4'>Resultados:</th>
				<tr>
			    	<td>Nota M1: </td> 
			    	<td id='d'><?php echo $m1; ?></td>
				</tr>
				<tr>
					<td>Nota Diciplina: </td>
				    <td id='d'><?php echo $nd; ?></td>
				</tr>
				<tr>
					<td>Nota Integrada: </td>
					<td id='d'><?php echo $ni; ?></td>
				</tr>
				<tr>
					<td>Nota M2:</td>
					<td id='d'><?php echo $m2; ?></td>
				</tr>
				<tr>
					<td>Média Final:</td>
					<td id='d'><?php echo number_format($med,1); ?></td>
				</tr>
				<tr>
					<td> Status do Aluno:</td>
					<td id='d'><?php  echo $s ?></td>
				</tr>
			</table>

			</br>
			<a href="index.php">Voltar</a>
		</div>
	</body>
</html>