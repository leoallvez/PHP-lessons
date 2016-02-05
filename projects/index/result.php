<!DOCTYPE html>
<html>
	<head>
		<title>Prova Feita | Resultados</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1'>
		<link rel="shortcut icon" href="_img/logo.ico" type="image/x-icon"/>
		<link rel='stylesheet' href='_css/style.css' media='screen and (color)'>
		<link rel='stylesheet' href='_css/mobile.css' media='(max-width: 720px)'>
	</head>
	<body>
		<?php include "_php/header.php";?>
		<div id='principal'>
			<?php
				include '_php/functions.php';
			
				$m1 = recebeValor('m1');
				$nd = recebeValor('nd');
				$ni = recebeValor('ni');
				
				$m2 = calculaM2($nd, $ni);
				$me = calculaMedia($m1, $m2);
				$st = retornaStatus($me);
			?>
			<table> 
				<th colspan='4' id='d'>Resultados:</th>
				<tr>
			    	<td id='e'>Nota M1: </td> 
			    	<td id='d'><?= $m1; ?></td>
				</tr>
				<tr>
					<td id='e'>Nota Diciplina: </td>
				    <td id='d'><?= $nd; ?></td>
				</tr>
				<tr>
					<td id='e'>Nota Integrada: </td>
					<td id='d'><?= $ni; ?></td>
				</tr>
				<tr>
					<td id='e'>Nota M2:</td>
					<td id='d'><?= $m2; ?></td>
				</tr>
				<tr>
					<td id='e'>Média Final:</td>
					<td id='d'><?= $me; ?></td>
				</tr>
				<tr>
					<td id='e'>Situação do Aluno:</td>
					<td id='d'><?= $st; ?></td>
				</tr>
			</table>
			</br>
			<a class='bot' id='vot'href='javascript:history.go(-1)'>Voltar</a>
		</div>
		<?php include "_php/footer.php"; ?>
	</body>
</html>