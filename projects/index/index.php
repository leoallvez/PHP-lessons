<!DOCTYPE html>
<html>
	<head>
		<title>Campus Calc | Início</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="_css/style-calc.css" media="screen and (color)">
		<link rel="stylesheet" href="_css/mobile.css" media="(max-width: 720px)">
		<script src="_javascript/script.js"></script>
		<?php include "_php/functions.php"; ?>
	</head>
	<body>
		<div id="principal">
			<form method="get" action="result.php">
				<h2>Campus Calc<sup><span id="bet"> beta</span></sup></h2>
				<fieldset>
					<legend><strong>M1</strong></legend>
					<label for="nm1">Nota M1:</label></br>
					<input type="number" name="m1" value="" id="nm1" list="lista" step="0.1" 
					min="0" max="10" onFocus="limpa('nm1')" onBlur="zera('nm1')" placeholder="0.0" class="a" ></br>
					<?php notas(); ?>

				</fieldset>
				<fieldset>
					<legend><strong>M2</strong></legend>
					<fieldset class="diciplina">
						<legend>Diciplina</legend>
						<input type="number" name="nd" value="" id="nnd" list="lista" step="0.1" 
						min="0" max="10" onFocus="limpa('nnd')" onBlur="zera('nnd')" placeholder="0.0" class="b">
						<?php notas(); ?>
						<fieldset class="escolha">
							<legend>Prova feita</legend>
							<label for="drn">não</label>
							<input type="radio" name="rd" id="drn" value="n" checked/>
							<label for="dry">sim</label>
							<input type="radio" name="rd" id="dry" value="s"/>
						</fieldset>
					</fieldset>
					<fieldset class="diciplina">
						<legend>Integrada</legend>
					
						<input type="number" name="ni" value="" id="nni" list="lista" step="0.1" 
						min="0" max="10" onFocus="limpa('nni')" onBlur="zera('nni')" placeholder="0.0" class="b">
						<?php notas(); ?>
						<fieldset class="escolha">
								<legend>Prova feita</legend>
								<label for="irn">não</label>
								<input type="radio" name="ri" id="irn" value="n" checked/>
								<label for="iry">sim</label>
								<input type="radio" name="ri" id="iry" value="s"/>
							</fieldset>
						</fieldset>
					</fieldset>
				</fieldset>
				<input type="submit" class="bot" value="Calcular" onClick="zeraTudo()">
				<input type="reset"  class="bot" value="Apagar" id="a">
			</form>
		</div>
	</body>
</html>