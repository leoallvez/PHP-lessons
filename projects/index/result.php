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
				include "_php/functions.php";
			
				$m1 = recebeValor("m1");
				$nd = recebeValor("nd");
				$ni = recebeValor("ni");
				
				$m2 = calculaM2($nd, $ni);
				$me = calculaMedia($m1, $m2);
				$st = retornaStatus($me);
			?>
			<table> 
				<th colspan='4' id="d">Resultados:</th>
				<tr>
			    	<td>Nota M1: </td> 
			    	<td id='d'><?= $m1; ?></td>
				</tr>
				<tr>
					<td>Nota Diciplina: </td>
				    <td id='d'><?= $nd; ?></td>
				</tr>
				<tr>
					<td>Nota Integrada: </td>
					<td id='d'><?= $ni; ?></td>
				</tr>
				<tr>
					<td>Nota M2:</td>
					<td id='d'><?= $m2; ?></td>
				</tr>
				<tr>
					<td>Média Final:</td>
					<td id='d'><?= $me; ?></td>
				</tr>
				<tr>
					<td>Situação do Aluno:</td>
					<td id='d'><?= $st; ?></td>
				</tr>
			</table>
			</br>
			<a href="javascript:history.go(-1)">Voltar</a>
		</div>
	</body>
</html>